(function () {
  "use strict";

  require('require-kiss');

  var EventEmitter = require('events').EventEmitter
    , navigator = window.navigator
    , Periodic = require('periodic');

  function create(options) {
    options = options || {};

    var emitter = new EventEmitter()
      , useBrowser = true
      , useNotFound = true
      , useAppCache = false
      , useFavinet = true
      , useInternet = true
      , useOrigin = true
      , strategies = {}
      , periodics = {};


    if ('undefined' === navigator.onLine) {
      emitter.status = 'online';
    } else {
      emitter.status = (navigator.onLine && 'online') || 'offline';
    }
    emitter.browserStatus = emitter.status;

    strategies.origin = require('amionline-origin').create;
    strategies.internet = require('amionline-favinet').create;

    function createPeriodicEmitter(key, Strategy, howoften) {
      var status
        , periodic;
      
      // TODO relay(err, evname)
      function relay(err, evname, msg) {
        if (status !== evname) {
          emitter.emit(key, err, evname, msg);
          status = evname;
        }
      }

      function check() {
        Strategy(relay);
      }

      periodic = Periodic.create(check, howoften);
      periodic.checkNow = function (a, b, c) {
        if ('function' === typeof a) {
          Strategy(function (x, y, z) {
            a(x, y, z);
            relay(x, y, z);
          }, b, c);
        } else {
          periodic.run();
        }
      };
      periodics[key] = periodic;
      return periodic;
    }

    function createBrowserEmitter() {
      var status = navigator.onLine && 'online' || 'offline';

      emitter.status = status;

      function handleWindowOnline() {
        if (status === navigator.onLine) {
          return;
        }
        emitter.emit('amionline.browser', null, navigator.onLine);
        status = navigator.onLine;
      }

      // window.onLine can reliably determine that the browser is offline
      // it cannot reliably determine that the browser if online
      // http://www.w3.org/TR/html5/offline.html#browser-state
      window.addEventListener('online', handleWindowOnline, false);
      window.addEventListener('offline', handleWindowOnline, false);

      // I wonder if the online event ever skips firing
      // particularly I worry about sleep / wakeup
      setInterval(handleWindowOnline, 10000);
    }

    periodics.origin = createPeriodicEmitter('amionline-origin', strategies.origin, 5000);
    periodics.internet = createPeriodicEmitter('amionline-internet', strategies.internet, 10000);
    createBrowserEmitter();

    //
    // Interpreting the status results
    //
    /*

        | Browser |  Origin  | Internet ||   STATUS   |
        +=========+==========+==========++============+
        |   OFF!  |         ---         ||    OFF     |
        +---------+----------+----------++------------+
        |         |    OFF!  |   ---    ||    OFF     |
        +         +----------+----------++------------+
        |   ON    |    ON!   |   ---    ||    ON      |
        +         +----------+----------++------------+
        |         |         OFF         ||    OFF     |
        +---------+----------+----------++------------+

    */
    emitter.on('amionline-state', function (err, status) {
      // In the case that the internet is live,
      // but the site is down
      if ('offline' === emitter.originStatus) {
        status = 'offline';
      } else if ('online' === emitter.originStatus) {
        status = 'online';
      }

      // For the rare case that a request finished
      // after the browser goes into offline mode
      if ('offline' === emitter.browserStatus) {
        status = 'offline';
      }

      // If the status hasn't changed
      // don't emit anything
      if (status === emitter.status) {
        return;
      }
      emitter.status = status;

      emitter.emit(status, err);
    });


    // if the browser is offline, that's final
    // if the browser is online, wait for confirmation before declaring it
    emitter.on('amionline-browser', function (err, status) {
      if (status === emitter.browserStatus) {
        return;
      }
      emitter.browserStatus = status;

      // toggle everything off
      if ('offline' === status) {
        emitter.emit('amionline-internet', err, 'offline');
        emitter.emit('amionline-origin', err, 'offline');
        emitter.emit('amionline-state', err, 'offline');
      } /* else {
        emitter.emit('amionline-state', 'offline');
      } */

      emitter.emit('browser', err, status);
    });


    // if the site is up, it's online
    // if the site is down, it's not
    emitter.on('amionline-origin', function (err, status) {
      if (status === emitter.originStatus) {
        return;
      }

      if ('offline' === status || 'error' === status) {
        status = 'offline';
      }
      emitter.originStatus = status;
      emitter.emit('amionline-state', err, status);

      emitter.emit('origin', err, status);
    });


    // if the internet is reachable, that's final
    // if it isn't, wait for confirmation before declaring it
    emitter.on('amionline-internet', function (err, status) {
      if (status === emitter.internetStatus) {
        return;
      }

      if ('offline' === status || 'error' === status) {
        status = 'offline';
      }
      emitter.internetStatus = status;
      emitter.emit('amionline-state', err, status);

      emitter.emit('internet', err, status);
    });

    emitter.use = createPeriodicEmitter;
    emitter.periodics = periodics;
    emitter.checkNow = function (name, a, b, c) {
      periodics[name].checkNow(a, b, c);
    };
    emitter.start = function (name, interval) {
      periodics[name].started = true;
      periodics[name].start(interval);
    };
    emitter.stop = function (name) {
      periodics[name].started = false;
      periodics[name].stop();
    };
    return emitter;
  }

  exports.create = create;
  provide('amionline', exports);
}());
