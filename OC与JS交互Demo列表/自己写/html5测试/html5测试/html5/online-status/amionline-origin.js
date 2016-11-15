(function () {
  "use strict";

  //
  // Local Site Status
  //
  // This strategy is simple and requires no changes for most servers
  //
  // we request a non-existing resource on the remote site
  // if the request comes back with a 200
  //   * if a url is specified, the site is online
  //   * if no url is specified 'online.json' is checked for offline / online status
  // if the request comes back with a 404, the site is online
  // if the request comes back with < 100, the site is offline
  // if the request comes back with something else, there is an error
  function create(respond, options) {
    options = options || {};

    var url = options.url || "online.json";
    options.timeout = options.timeout || 2000;

    function testAppCache(xhr) {
      var data;
      try {
        data = JSON.parse(xhr.responseText);
      } catch(e) {
        respond(new Error("online.json could not be parsed"));
        return;
      }

      if ('online' === data.status) {
        respond(null, 'online');
      } else if ('offline' === data.status) {
        respond(null, 'offline');
      } else {
        respond(new Error("online.json's status is neither 'online' nor 'offline'"));
      }
    }

    function request() {
      var xhr = new XMLHttpRequest()
        , resource = url + "?_no_cache_=" + new Date().valueOf()
        , waitfor = options.timeout
        , err
        , result = 'error'
        , timeoutid = -1;

      function handleStateChange() {
        if (xhr.readyState !== 4) {
          return;
        }

        clearTimeout(timeoutid);        

        if (200 === xhr.status) {
          if (!options.url) {
            return testAppCache(xhr);
          }
          result = 'online';
        } else if (404 === xhr.status) {
          result = 'online';
        } else if (xhr.status < 100) {
          result = 'offline';
        } else {
          err = new Error("unexpected xhr status: " + xhr.status);
        }

        // TODO add error
        respond(err, result);
      }

      xhr.open("GET", resource, true);
      xhr.onreadystatechange = handleStateChange;
      xhr.send();

      function assumeOffline() {
        xhr.abort();
        respond(new Error("timeout after " + waitfor + "ms"), 'offline');
      }

      timeoutid = setTimeout(assumeOffline, waitfor);
    }

    request();
  }

  exports.create = create;
  provide('amionline-origin', exports);
}());
