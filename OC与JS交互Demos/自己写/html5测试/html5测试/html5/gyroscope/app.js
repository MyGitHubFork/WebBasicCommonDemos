var global = (function () { return this; }());
(function () {
  "use strict";

  function run() {
    var setText = function (id, text) {
          global.document.getElementById(id).innerHTML = String(text);
        };

    function handleFirstDeviceMotion(ev) {
      window.removeEventListener("devicemotion");
      if (null === ev.acceleration) {
        setText('bad-news', "null === event.acceleration<br/>Your device does not have (or does not expose) a gyroscope.");
      }
      window.addEventListener("devicemotion", handleDeviceMotion);
    }

    function handleDeviceMotion(ev) {
      setText('interval', ev.interval);

      setText('x', ev.acceleration.x);
      setText('y', ev.acceleration.y);
      setText('z', ev.acceleration.z);

      setText('r-alpha', ev.rotationRate.alpha);
      setText('r-beta', ev.rotationRate.beta);
      setText('r-gamma', ev.rotationRate.gamma);
    }

    function handleDeviceOrientation(ev) {
      setText('alpha', ev.alpha);
      setText('beta', ev.beta);
      setText('gamma', ev.gamma);
    }

    window.addEventListener("deviceorientation", handleDeviceOrientation);

    if (undefined === window.DeviceMotionEvent) {
      setText('bad-news', "undefined === window.DeviceMotionEvent<br/>Your device lacks (or does not expose) an accelerometer (or gyroscope).");
      return;
    }

    setText('no', '');
    window.addEventListener("devicemotion", handleFirstDeviceMotion);
  }

  window.addEventListener('load', run);

}());
