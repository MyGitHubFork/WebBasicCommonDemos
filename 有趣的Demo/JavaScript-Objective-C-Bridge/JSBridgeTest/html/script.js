var connectionDelegate = {}

function __hex (hexdata) {
    var data = hexdata.replace (/([a-f0-9]){2}/ig, function (x) {
        return String.fromCharCode (parseInt (x, 16))
    })

    return data
}

// event must be one of following: fail, recv, response, sent, finish
function add_connection_handler (connid, event, func) {
    if (! connectionDelegate[connid])
        connectionDelegate[connid] = {}
    connectionDelegate[connid][event] = func
}

function connectionDidFailWithError (connid, err) {
    var hndl = connectionDelegate[connid]
    if (hndl && hndl.fail) {
        hndl.fail (connid, err)
    } else {
        $("pre").append ("\nconnectionDidFailWithError: " + connid + ": " + err)
    }
}

function connectionDidReceiveData (connid, data) {
    var hndl = connectionDelegate[connid]
    if (hndl && hndl.recv) {
        hndl.recv (connid, data)
    } else {
        $("pre").append ("\nconnectionDidReceiveData: " + connid + ": " + data)
    }
}

function connectionDidReceiveResponse (connid) {
    var hndl = connectionDelegate[connid]
    if (hndl && hndl.response) {
        hndl.response (connid)
    } else {
        $("pre").append ("\nconnectionDidReceiveResponse: " + connid)
    }
}

function connectionDidSendBodyData (connid) {
    var hndl = connectionDelegate[connid]
    if (hndl && hndl.sent) {
        hndl.sent (connid)
    } else {
        $("pre").append ("\nconnectionDidSendBodyData: " + connid)
    }
}

function connectionDidFinishLoading (connid) {
    var hndl = connectionDelegate[connid]
    if (hndl && hndl.finish) {
        hndl.finish (connid)
    } else {
        $("pre").append ("\nconnectionDidFinishLoading: " + connid)
    }
}

////////////////////

function create_stack () {
    return []
}

function stack_push_raw_string (st, val) {
    st.push ("-" + val)
}

function stack_push_operator (st, op) {
    st.push ("@" + op)
}

function hexify (str) {
    var hex = ""
    for (var i = 0; i < str.length; i ++) {
        hex += str.charCodeAt (i).toString (16)
    }

    return hex
}

function stack_push_string (st, op) {
    if (typeof (op) != "string")
        op = op.toString ()

    if (op.match (/^[a-zA-Z0-9!@#$%^&*()_+{}|\[\]\:";'<>?,]*$/)) {
        stack_push_raw_string (st, op)
    } else {
        stack_push_raw_string (st, hexify (op))
        stack_push_operator (st, "hexstr")
        stack_push_operator (st, "str")
    }
}

function stack_push_data (st, op) {
    if (typeof (op) != "string")
        op = op.toString ()

    stack_push_raw_string (st, hexify (op))
    stack_push_operator (st, "hexstr")
}

function stack_execute (st) {
    var uri = "bridge:///" + st.join ("/")

    setTimeout (function () {
        location.href = uri
    }, 100)
}

JSBridgeStack = function () {
    this.stack = create_stack ()
}

JSBridgeStack.prototype.push = function () {
    for (var i = 0; i < arguments.length; i ++) {
        stack_push_string (this.stack, arguments[i])
    }
    return this
}

JSBridgeStack.prototype.pushdata = function () {
    for (var i = 0; i < arguments.length; i ++) {
        stack_push_data (this.stack, arguments[i])
    }
    return this
}

JSBridgeStack.prototype.operate = function (op) {
    stack_push_operator (this.stack, op)
    return this
}

JSBridgeStack.prototype.pushcallback = function (name, numargs) {
    return this.push (name, numargs).operate ("callback")
}

JSBridgeStack.prototype.execute = function () {
    stack_execute (this.stack)
}

///////////////////

function escape_utf8 (str) {
    return encodeURIComponent (str)
}

function oauth_make_signature_base (url, method, params, request_body) {
    var params_sorted = []
    for (var i in params) {
        params_sorted.push ([i, params[i]])
    }
    params_sorted.sort (function (a, b) {return a > b ? 1 : -1})

    console.debug (params_sorted)

    var body = $.map (params_sorted, function (a) {
        return a[0] + "=" + escape_utf8 (a[1])
    }).join ("&")

    if (request_body)
        body += "&" + request_body

    var base = $.map ([method, url, body], escape_utf8).join ("&")

    return base
}

CALLBACK = []
var GLOBAL = this
function make_callback (func) {
    CALLBACK.push (func)
    var name = "CALLBACK_" + (CALLBACK.length - 1).toString ()
    GLOBAL[name] = function () {
        try {
            return func.apply (this, arguments)
        } catch (err) {
            alert (err)
        }
    }
    return name
}

function test_twitter_oauth () {
    var consumer_secret = "MCD8BKwGdgPHvAuvgvz4EQpqDAtx89grbuNMRd7Eh98"
    var url = "https://api.twitter.com/oauth/request_token"
    var method = "POST"
    var params = {
        oauth_callback: "http://localhost:3005/the_dance/process_callback?service_provider_id=11",
        oauth_consumer_key: "GDdmIQH6jhtmLUypg82g",
        oauth_nonce: "QP70eNmVz8jvdPevU3oJD2AfF7R7odC2XJcn4XlZJqk",
        oauth_signature_method: "HMAC-SHA1",
        oauth_timestamp: "1272323042",
        oauth_version: "1.0"
    }

    var base = oauth_make_signature_base (url, method, params)
    console.assert (base == "POST&https%3A%2F%2Fapi.twitter.com%2Foauth%2Frequest_token&oauth_callback%3Dhttp%253A%252F%252Flocalhost%253A3005%252Fthe_dance%252Fprocess_callback%253Fservice_provider_id%253D11%26oauth_consumer_key%3DGDdmIQH6jhtmLUypg82g%26oauth_nonce%3DQP70eNmVz8jvdPevU3oJD2AfF7R7odC2XJcn4XlZJqk%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp%3D1272323042%26oauth_version%3D1.0")

        // console.assert (sig == "8wUi7m5HFQy76nowoCThusfgB+Q=")

}

function disassemble_response (res) {
    var dest = {}
    var arr = res.split ("&")
    for (var i in arr) {
        var namevalue = arr[i].split ("=", 2)
        dest[namevalue[0]] = namevalue[1]
    }

    return dest
}

function http_get (url, header, cont) {
    var cb2 = make_callback (function (connhandle, connid) {
        var res = ""

        add_connection_handler (connid, "recv", function (connid, data) {
            res += data.toString ()
        })

        add_connection_handler (connid, "finish", function (connid) {
            if (cont)
                cont (res)
        })

        new JSBridgeStack ().push (connhandle).operate ("http_send").execute ()
    })

    var jsb = new JSBridgeStack ()
    var n = 0
    for (var f in header) {
        jsb.push (header[f], f)
        n ++
    }
    jsb.push (n, url).operate ("http_get").pushcallback (cb2, 2).execute ()
}

function http_post (url, header, body, cont) {
    var cb2 = make_callback (function (connhandle, connid) {
        var res = ""

        add_connection_handler (connid, "recv", function (connid, data) {
            res += data.toString ()
        })

        add_connection_handler (connid, "finish", function (connid) {
            if (cont)
                cont (res)
        })

        new JSBridgeStack ().push (connhandle).operate ("http_send").execute ()
    })

    var jsb = new JSBridgeStack ()
    jsb.pushdata (body)
    var n = 0
    for (var f in header) {
        jsb.push (header[f], f)
        n ++
    }
    jsb.push (n, url).operate ("http_post").pushcallback (cb2, 2).execute ()
}

function make_oauth_header (params, sig) {
    var x = []
    for (var name in params) {
        var value = params[name]
        x.push (name + "=\"" + escape_utf8 (value) + "\"")
    }
    x.push ("oauth_signature" + "=\"" + escape_utf8 (sig) + "\"")
    var auth = "OAuth " + x.join (", ")

    return auth
}

function tweet (consumer_key, consumer_secret, oauth_token, oauth_token_secret, text, cont) {
    var params = {
        oauth_consumer_key: consumer_key,
        oauth_nonce: "tweet" + Date.now (),
        oauth_signature_method: "HMAC-SHA1",
        oauth_token: oauth_token,
        oauth_timestamp: Math.floor (Date.now () / 1000).toString (),
        oauth_version: "1.0"
    }

    var url = "http://api.twitter.com/1/statuses/update.json"
    var method = "POST"
    var body = "status=" + escape_utf8 (text)
    var base = oauth_make_signature_base (url, method, params, body)

    new JSBridgeStack ().push (base).push(consumer_secret + "&" + oauth_token_secret).operate ("hmac_sha1").operate ("base64data").pushcallback (
        make_callback (function (sig) {
            var auth = make_oauth_header (params, sig)

            http_post (url, {Authorization: auth}, body, function (res) {
                var data = eval ("(" + res + ")")

                if (cont)
                    cont (data)
            })
        }), 1).execute ()
}

function oauth_request_token_params (consumer_key, oauth_cb) {
    var params = {
        oauth_callback: "bridge-callback://" + oauth_cb + "/",
        oauth_consumer_key: consumer_key,
        oauth_nonce: "hoge" + Date.now (),
        oauth_signature_method: "HMAC-SHA1",
        oauth_timestamp: Math.floor (Date.now () / 1000).toString (),
        oauth_version: "1.0"
    }

    return params
}

function oauth_access_token_params (consumer_key, oauth_token, oauth_verifier) {
    var params = {
        oauth_consumer_key: consumer_key,
        oauth_nonce: "hoge2" + Date.now (),
        oauth_signature_method: "HMAC-SHA1",
        oauth_token: oauth_token,
        oauth_timestamp: Math.floor (Date.now () / 1000).toString (),
        oauth_verifier: oauth_verifier,
        oauth_version: "1.0"
    }

    return params
}

function oauth_access_token (consumer_key, consumer_secret, oauth_token_secret, oauth_token, oauth_verifier, cont) {
    var params = oauth_access_token_params (consumer_key, oauth_token, oauth_verifier)

    var url = "https://api.twitter.com/oauth/access_token"
    var method = "POST"
    var base = oauth_make_signature_base (url, method, params)

    new JSBridgeStack ().push (base, consumer_secret + "&" + oauth_token_secret).operate ("hmac_sha1").operate ("base64data").pushcallback (make_callback (function (sig) {
        var auth = make_oauth_header (params, sig)

        http_post (url, {Authorization: auth}, "", function (res) {
            var data = disassemble_response (res)

            if (cont) {
                cont (data.oauth_token, data.oauth_token_secret)
            }
        })

    }), 1).execute ()
}

function oauth_request_token (consumer_key, consumer_secret, cont) {
    var stat = {}

    var params = oauth_request_token_params (consumer_key, cont (stat))
    var url = "http://api.twitter.com/oauth/request_token"
    var method = "POST"
    var base = oauth_make_signature_base (url, method, params)

    new JSBridgeStack ().push (base, consumer_secret + "&").operate ("hmac_sha1").operate ("base64data").pushcallback (make_callback (function (sig) {
        // $("pre").append ("\n" + "oauth_request_token: signature: " + sig)

        var auth = make_oauth_header (params, sig)

        http_post (url, {Authorization: auth}, "", function (res) {
            var data = disassemble_response (res)
            stat.oauth_token_secret = data.oauth_token_secret

            // new JSBridgeStack ().push (data.oauth_token_secret, data.oauth_token).operate ("store_oauth_token").pushcallback (make_callback (function () {
                new JSBridgeStack ().push ("http://api.twitter.com/oauth/authorize?oauth_token=" + data.oauth_token).operate ("open_url_in_new_browser").
                    pushcallback (make_callback (function (hndl) {
                        stat.browser_handle = hndl;
                    }), 1).execute ()
            // }), 0).execute ()
        })
    }), 1).execute ()
}

function twitter_oauth (consumer_key, consumer_secret, cont) {
    oauth_request_token (consumer_key, consumer_secret, function (stat) {
        return make_callback (function (data) {
            var browser_handle = stat.browser_handle
            var oauth_token_secret = stat.browser_handle

            var res = __hex (data)
            // $("pre").append ("\n" + "OAuth callback: " + res)

            new JSBridgeStack ().push ("OAuth callback: " + res).operate ("print").
                push (browser_handle).operate ("close_browser").
                execute ()

            var token = disassemble_response (res)

            oauth_access_token (consumer_key, consumer_secret, oauth_token_secret, token.oauth_token, token.oauth_verifier, cont)
        })
    })
}

function home_timeline (consumer_key, consumer_secret, oauth_token, oauth_token_secret, cont) {
    // $("pre").append ("\nhome_timeline: \n -" + [consumer_key, consumer_secret, oauth_token, oauth_token_secret, cont].join ("\n -"))

    var params = {
        oauth_consumer_key: consumer_key,
        oauth_nonce: "timeline" + Date.now (),
        oauth_signature_method: "HMAC-SHA1",
        oauth_token: oauth_token,
        oauth_timestamp: Math.floor (Date.now () / 1000).toString (),
        oauth_version: "1.0"
    }

    var url = "http://api.twitter.com/1/statuses/home_timeline.json"
    var method = "GET"
    var base = oauth_make_signature_base (url, method, params)

    new JSBridgeStack ().push (base).push(consumer_secret + "&" + oauth_token_secret).operate ("hmac_sha1").operate ("base64data").pushcallback (
        make_callback (function (sig) {
            var auth = make_oauth_header (params, sig)

            http_get (url, {Authorization: auth}, function (res) {
                var data = eval ("(" + res + ")")

                if (cont)
                    cont (data)
            })
        }), 1).execute ()
}

//////////////////////

function make_tweet_elem (t) {
    var id = t.id
    var text = t.text
    var screen_name = t.user.screen_name
    var elem = $("<div>").css ({margin: "0px", "max-width": "320px"}).
        append ($("<p>").css ({margin: "0px"}).text ("@" + screen_name)).
        append ($("<p>").css ({margin: "0px"}).text (text))

    return elem
}

function test_objc (tweets) {
    var tweet_map = {}

    new JSBridgeStack ().
        push ("UITableViewController").operate ("look_up_class").operate ("create_instance").
        push (make_callback (function (selector) {
            var f = ({
                numberOfSectionsInTableView: function () {
                    return 1;
                },
                tableView_numberOfRowsInSection: function (section) {
                    return tweets.length;
                },
                tableView_cellForRowAtIndexPath: function (section, row) {
                    var t = tweets[row]
                    var elem = tweet_map[t.id]
                    if (! elem) {
                        elem = make_tweet_elem (t)
                        tweet_map[t.id] = elem
                    }
                    var outer = $("<html>").append ($("<body>").css ({margin: "0px", padding: "0px"})).append (elem)
                    return outer.html ()
                },
                tableView_heightForRowAtIndexPath: function (section, row) {
                    var t = tweets[row]
                    var elem = tweet_map[t.id]
                    if (! elem) {
                        elem = make_tweet_elem (t)
                        tweet_map[t.id] = elem
                    }
                    var outer = $("<div>").append (elem)
                    $("body").append (outer)
                    var height = outer.innerHeight ()
                    outer.remove ()
                    return height
                }
            })[selector]

            var args = []
            for (var i = 1; i < arguments.length; i ++) {
                args.push (arguments[i])
            }
            var ret = f.apply (this, args)
            return ret
        })).operate ("xxx_pushtable").
        // operate ("self")
        // operate ("send_mesg")
        pushcallback (make_callback (function (hndl) {
            $("pre").append ("\ntable view controller: " + hndl)
        }), 1).execute ()
}

//////////////////////


////////////////////

$(document).ready (function () {
    var consumer_secret = "QBvGYz4yTwFx1tGabhbsxE3ZXmaG01h3VRjfJoph0"
    var consumer_key = "7IoQbg88rT3GJ01HlTOc9A"

    try {
        // test_objc ([1, 2, 3])
        // throw ("done")

        new JSBridgeStack ().operate ("twitter_credential").pushcallback (make_callback (function (oauth_token, oauth_token_secret) {
            if (oauth_token && oauth_token.length > 0 && oauth_token_secret && oauth_token_secret.length > 0) {
                // tweet (consumer_key, consumer_secret, oauth_token, oauth_token_secret, "てすと。 " + Date.now (), function (res) {
                //     $("pre").append ("\nTweet: " + res.id + " " + res)
                // })

                home_timeline (consumer_key, consumer_secret, oauth_token, oauth_token_secret, function (data) {
                    test_objc (data)
                    // new JSBridgeStack ().push (data.toString ()).operate ("print").execute ()
                })
            } else {
                twitter_oauth (consumer_key, consumer_secret, function (oauth_token, oauth_token_secret) {
                    new JSBridgeStack ().push (oauth_token_secret, oauth_token).operate ("store_twitter_credential").execute ()
                    tweet (consumer_key, consumer_secret, oauth_token, oauth_token_secret, "setting up my twitter 私のさえずりを設定する " + Date.now (), function (res) {
                        $("pre").append ("\nTweet: " + res.id + " " + res)
                    })
                })
            }
        }), 2).execute ()
    } catch (err) {
        alert (err)
    }
})
