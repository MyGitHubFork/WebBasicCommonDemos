var window, global = (function () { return this; }());
/*global global: true */
(function () {
  "use strict";

  var document = window.document
    , appCache = window.applicationCache;
    //  appCacheStatuses = [
    //    "UNCACHED",
    //    "IDLE",
    //    "CHECKING",
    //    "DOWNLOADING",
    //    "UPDATEREADY",
    //    "OBSOLETE"
    //  ];

  if (undefined === appCache) {
    alert("Your device is incompatible. Try iOS, Android, or Linux. Windows requires Google Chrome");
    window.location.href = "http://www.google.com/chrome";
  }

  console.log('appCacheLoading', new Date().toISOString());

  // for coneveniece
  appCache.on = appCache.addEventListener;

  function report(ev) {
    console.log('appCacheEvent', ev, appCache.status, new Date().toISOString());
    if ('progress' === ev.type) {
      if (undefined !== ev.total) {
        document.getElementById('event-phase-total').innerHTML = ev.total;
        document.getElementById('app-cache-progress').setAttribute('value', ev.eventPhase);
        document.getElementById('app-cache-progress').setAttribute('max', ev.total);
      } else {
        document.getElementById('app-cache-progress').innerHTML = ev.eventPhase;
      }
      document.getElementById('event-phase').innerHTML = ev.eventPhase;
      return;
    }

    if ('downloading' === ev.type) {
      // show update bars
    }

    if ('checking' === ev.type) {
      // show "checking for updates"
    }

    if ('updateready' == ev.type) {
      // on refresh and .update()
      // refresh application
      alert('new version available, updating');
      window.location.reload();
    }

    if ('noupdate' === ev.type) {
      // show "up-to-date"
    }

    if ('cached' === ev.type) {
      // show "download complete"
    }

    if ('error' === ev.type) {
      document.getElementById('bad-news').innerHTML = 'error (probably offline)';
    }
  }

  // fetching the application cache manifest and checking for updates.
  appCache.on('checking', report, false);
  // an error occurs during the caching process.
  appCache.on('error', report, false);
  // there is no update to download
  appCache.on('noupdate', report, false);
  // resources are being downloaded into the cache.
  appCache.on('downloading', report, false);
  // periodically throughout the download process.
  appCache.on('progress', report, false);
  // a resource update is ready
  // FF: this event is not currently used since versioned application caches aren't supported yet.
  appCache.on('updateready', report, false);
  // caching is complete.
  appCache.on('cached', report, false);
  
  function domListener(ev) {
    console.log('domEvent', ev, new Date().toISOString());
    if ('update' === ev.target.getAttribute('name')) {
      console.log('update');
      appCache.update();
    }
  }

  function onDomReady() {
    console.log('domReady', new Date().toISOString());
    document.body.addEventListener('click', domListener, false);
  }

  window.addEventListener('load', onDomReady, false);
}());
