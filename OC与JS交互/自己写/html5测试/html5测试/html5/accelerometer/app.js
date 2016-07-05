var global = (function () { return this; }());
(function () {
  "use strict";

  function run() {
    var setText = function (id, text) {
          global.document.getElementById(id).innerHTML = String(text);
        };

    function handleDeviceMotion(ev) {
      setText('x', ev.accelerationIncludingGravity.x);
      setText('y', ev.accelerationIncludingGravity.y);
      setText('z', ev.accelerationIncludingGravity.z);
      setText('interval', ev.interval);
    }

    if (undefined === window.DeviceMotionEvent) {
      setText('bad-news', "undefined === window.DeviceMotionEvent<br/>Your device is not supported.");
      return;
    }

    setText('no', '');
    window.addEventListener("devicemotion", handleDeviceMotion);
  }

  window.addEventListener('load', run);

}());
