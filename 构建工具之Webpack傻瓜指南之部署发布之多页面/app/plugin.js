/*
* @Author: huangchengdu
* @Date:   2016-11-15 17:13:07
* @Last Modified by:   huangchengdu
* @Last Modified time: 2016-11-15 17:15:13
*/

(function ( $ ) {
    const shade = "#556b2f";
    $.fn.greenify = function() {
        this.css( "color", shade );
        return this;
    };
}( jQuery ));