(function () {
  "use strict";

  require('require-kiss');

  function Periodic(fn, period) {
    this.fn = fn;
    this.period = period;
    this.interval = -1;
  }

  Periodic.prototype.run = function () {
    this.stop();
    this.start();
  };

  Periodic.prototype.start = function () {
    if (-1 !== this.interval) {
      return;
    }
    this.interval = setInterval(this.fn, this.period);
    this.fn();
  };

  Periodic.prototype.stop = function () {
    if (-1 === this.interval) {
      return;
    }
    clearInterval(this.interval);
    this.interval = -1;
  };

  function create(fn, period) {
    return new Periodic(fn, period);
  }

  module.exports.create = create;
  provide('periodic', module.exports);
}());
