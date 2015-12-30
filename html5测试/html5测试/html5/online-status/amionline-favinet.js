(function () {
  "use strict";

  //
  // Remote Favicon Loader Strategy
  //
  // This stragety relies on the ability to load cross-site images
  //
  // Note: When an Application Cache, this strategy will
  // only work if a NETWORK section specifies '*' or the prefix URLs
  // for each site. Using a prefix pattern will not work.

  function abort(img, i, imgs) {
    // The only way to really abort an image load
    // is with window.stop(), but this aborts any
    // ajax calls currently in progress and would
    // be a very bad idea to try here
    // http://stackoverflow.com/q/930237/151312
    // window.stop();

    // this probably doesn't do anything at all
    delete imgs[i];

    // this would have to be set to a known-good
    // cached image to have positive effect
    // img.src="";
  }

  function create(respond, options) {
    options = options || {};

    var favilist = options.favicons || []
      , tryatonce = favilist.length
      , waitfor = options.timeout || 5000
      , imgs = [];

    if (!(favilist.length > 0)) {
      tryatonce = 2;
      favilist = require('amionline-favinet-list').urls;
      favilist.sort(function() { return 0.5 - Math.random(); });
      favilist = favilist.slice(0, tryatonce);
      //throw new Error('List of favicons is empty!!!');
    }

    function request(favicon) {
      var img = new Image()
        , timeoutid = -1;

      img.src = favicon + "?_no_cache_=" + new Date().valueOf();

      // if any succeed, we're online
      function onLoad(ev) {
        clearTimeout(timeoutid);
        img.failed = false;
        // since we can't reliably abort images, we just
        // make the array size zero
        if (imgs.length !== tryatonce) {
          return;
        }
        imgs.forEach(abort);
        imgs = [];
        respond(null, 'online');
      }

      // if all fail, we're probably not online
      // if at least one succeeded, we're online
      function onError(ev) {
        var allFailed = true;
        img.failed = true;

        imgs.forEach(function (img) {
          if (true !== img.failed) {
            allFailed = false;
          }
        });

        // Also: check length for the case that one fails 
        // after another has succeeded and the array 
        // has already been cleared
        if (!allFailed || imgs.length !== tryatonce) {
          return;
        }

        imgs = [];
        // If all failed, we're probably offline
        respond(null, 'offline');
      }

      function onTimeout() {
        if (imgs.length !== tryatonce) {
          return;
        }
        imgs.forEach(abort);
        imgs = [];
        respond(new Error('timeout after ' + waitfor + 'ms'), 'offline');
      }

      img.onload = onLoad;
      img.onerror = onError;
      timeoutid = setTimeout(onTimeout, waitfor);
      imgs.push(img);
    }

    favilist.forEach(request);
  }

  exports.create = create;
  provide("amionline-favinet", exports);
}());
