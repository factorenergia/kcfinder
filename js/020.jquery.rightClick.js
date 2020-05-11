/** This file is part of KCFinder project
  *
  *      @desc Right Click jQuery Plugin
  *   @package KCFinder
  *   @version 3.12

*/

(function($) {
    $.fn.rightClick = function(func) {
        var events = "contextmenu rightclick";
        $(this).each(function() {
            $(this).unbind(events).bind(events, function(e) {
                $.globalBlur();
                e.preventDefault();
                $.clearSelection();
                if ($.isFunction(func))
                    func(this, e);
            });
        });
        return $(this);
    };
})(jQuery);