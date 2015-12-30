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

  Periodic.prototype.start = function (period) {
    if (period) {
      return this.setInterval(period);
    }
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

  Periodic.prototype.setInterval = function (period) {
    this.period = period;
    this.run();
  };

  function create(fn, period) {
    return new Periodic(fn, period);
  }

  module.exports.create = create;
  provide('periodic', module.exports);
}());
