/*
  Note: This is a minimalist example for demonstration purposes.
  Use libraries, don't write crap code yourself.
  |8^D
*/
(function () {
  "use strict";

  function getScreenSize() {
    var s = {};

    // Browsers
    if('number' === typeof window.innerWidth) {
      s.width = window.innerWidth;
      s.height = window.innerHeight;
      s.method = 'browser';
      return s;
    }

    // Non-browsers (IE 6+  in 'standards compliant mode')
    if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
      s.width = document.documentElement.clientWidth;
      s.height = document.documentElement.clientHeight;
      s.method = 'ie';
      return s;
    }

    // Legacy non-browsers (IE 4 compatible)
    if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
      s.width = document.body.clientWidth;
      s.height = document.body.clientHeight;
      s.method = 'ie <= 4';
      return s;
    }

    return s;
  }

  function getOrientation() {
    var o = {}, s;

    o.angle = window.orientation;
    if ('undefined' !== o.angle) {
      o.method = 'orientation';
      return o;
    }

    s = getScreenSize();
    o.method = 'resize';
    o.angle = 'portrait';
    if (s.width > s.length) {
      o.angle = 'landscape';
    }
    return o;
  }

  function runReportChanges(ev) {
    var o = getOrientation()
      , s = getScreenSize();

    document.getElementById('event-type').innerHTML = ev.type;
    document.getElementById('orientation-angle').innerHTML = o.angle;
    document.getElementById('orientation-method').innerHTML = o.method;
    document.getElementById('size-width').innerHTML = s.width;
    document.getElementById('size-height').innerHTML = s.height;
    document.getElementById('size-method').innerHTML = s.method;
  }
  

  // window.onload = runReportChanges
  window.addEventListener('load', runReportChanges);
  // window.onorientationchange = runReportChanges
  window.addEventListener('orientationchange', runReportChanges);
  // window.onresize = runReportChanges
  window.addEventListener('resize', runReportChanges);
}());
