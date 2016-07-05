(function () {
  "use strict";

  var appCache = require('app-cache')
    , getEl = function (a, b, c, d) {
        return document.getElementById(a, b, c, d);
      };

  function domListener(ev) {
    if ('update-check' === ev.target.getAttribute('name')) {
      appCache.checkNow();
    }

    if ('up-reload' === ev.target.getAttribute('name')) {
      appCache.reload();
    }

    if ('inst-dismiss' === ev.target.getAttribute('name')) {
      document.getElementById('installer').setAttribute('style', "display: none;");
    }

    if ('up-dismiss' === ev.target.getAttribute('name')) {
      document.getElementById('updater').setAttribute('style', "display: none;");
    }
  }

  function onDomReady() {
    console.log('domReady', new Date().toISOString());
    document.body.addEventListener('click', domListener, false);
  }
  window.addEventListener('load', onDomReady, false);

  //appCache.setUpdateInterval(1 * 60 * 60 * 1000);

  function showProgress(prefix, ev) {
    var loaded = 0;
    if (undefined !== ev.total) {
      document.getElementById(prefix + '-phase-total').innerHTML = 'of ' + String(ev.total);
      document.getElementById(prefix + '-progress').setAttribute('value', ev.loaded);
      document.getElementById(prefix + '-progress').setAttribute('max', ev.total);
      document.getElementById(prefix + '-phase').innerHTML = ev.loaded;
    } else {
      console.log(ev);
      loaded = Number(document.getElementById(prefix + '-phase').innerHTML)
      document.getElementById(prefix + '-phase').innerHTML = loaded + 1;
    }
  }
  
  //
  // INSTALL or UPDATE on initial page load
  //
  appCache.load.on('start', function () {
      console.log('start');
      var msg;
      document.getElementById('installer').setAttribute('style', "display: block;");
      if (!appCache.isInstalled()) {
        msg = "Welcome For the First Time";
      } else {
        msg = "Welcome Back. Updating";
      }
      document.getElementById('inst-start').innerHTML = msg;
  });
  appCache.load.on('loadstart', function () {
      // dom should (but may not be) ready by this point
      getEl('inst-loadstart').innerHTML = "started download";
  });
  appCache.load.on('progress', function (ev) {
      showProgress('inst', ev);
  });
  appCache.load.on('error', function () {
      getEl('inst-error').innerHTML = "Unexpected Error";
  });
  appCache.load.on('loadend', function () {
    if (appCache.isInstalled()) {
      setTimeout(function () {
        appCache.reload();
      }, 1000);
      getEl('inst-loadend').innerHTML = "Upgrade Complete, Restarting";
    } else {
      getEl('inst-loadend').innerHTML = "Install Complete";
    }
  });
  appCache.load.on('end', function () {
    document.getElementById('inst-progress').setAttribute('value', 1);
    document.getElementById('inst-progress').setAttribute('max', 1);
    getEl('inst-end').innerHTML = "The End. (ready to start application)";
  });

  //
  // UPDATE
  //
  //appCache.update.on('start', showWelcomeMessage);
  appCache.update.on('error', function () {
    getEl('up-error').innerHTML = "update failed. try again later";
  });
  appCache.update.on('start', function () {
    getEl('up-start').innerHTML = "Checking";
  });
  appCache.update.on('loadstart', function () {
    getEl('updater').setAttribute('style', '');
    getEl('up-loadstart').innerHTML = "load start";
  });
  appCache.update.on('progress', function (ev) {
    showProgress('up', ev);
  });
  appCache.update.on('loadend', function () {
    getEl('up-loadend').innerHTML = "load end";
  });
  appCache.update.on('start', function () {
    getEl('up-start').innerHTML = "Done Checking";
  });
  //appCache.update.on('end', showEnd);
}());
