/*jslint onevar: true, undef: true, newcap: true, nomen: true, regexp: true, plusplus: true, bitwise: true, devel: true, debug: true, es5: true, maxerr: 10 */
/*global module: true, clearTimeout: true, setTimeout: true, clearInterval: true, setInterval: true */
// see  http://www.jslint.com/lint.html for meaning of above strings
(function () {
  "use strict";

  var connect = require('connect'),
    fs = require('fs'),
    mime = require('connect/node_modules/mime'),
    path = require('path'),
    server;

  mime.define({'text/cache-manifest': ['manifest']});

  // TODO dynamically generate cache-manifest

  server = connect.createServer(
    connect.static(path.join(__dirname, './'))
  );

  module.exports = server;
}());
