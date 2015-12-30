(function (w, d, k) {
   var bkch;
   bkch = w[k] = {};
   bkch.w = w;
   bkch.d = d;
   bkch.f = (function () {
      return {
         init : function () {
            bkch.s = bkch.d.getElementsByTagName('BODY')[0];
            bkch.s.addEventListener("touchmove", function (e) { e.preventDefault(); }, false);
            bkch.w.setTimeout(bkch.f.orient, 0);
            bkch.w.onorientationchange = function () {
               bkch.f.orient();
            };
         },
         orient : function () {
            if (bkch.w.orientation === 0) {
               bkch.s.className = 'portrait';
            } else {
               bkch.s.className = 'landscape';
            }
            bkch.w.setTimeout(bkch.f.home, 0);
         },
         home : function () {
            bkch.w.scrollTo(0, 1);
         }
      };
   }());
   bkch.f.init();
}(window, document, 'backchannel'));
