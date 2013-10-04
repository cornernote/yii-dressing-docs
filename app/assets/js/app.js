/**
 * Application Scripts
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-skeleton
 * @license http://www.gnu.org/copyleft/gpl.html
 */
(function ($) {
    $(function () {
        $('.bs-docs-sidenav').affix({
            offset: {
                top: function () {
                    return $(window).width() <= 980 ? 290 : 210
                },
                bottom: 270
            }
        });
        $("a.toggle").toggle(function () {
            $(this).text($(this).text().replace(/Hide/, "Show"));
            $(this).parents(".summary").find(".inherited").hide();
        }, function () {
            $(this).text($(this).text().replace(/Show/, "Hide"));
            $(this).parents(".summary").find(".inherited").show();
        });
        $(".sourceCode a.show").toggle(function () {
            $(this).text($(this).text().replace(/show/, "hide"));
            $(this).parents(".sourceCode").find("div.code").show();
        }, function () {
            $(this).text($(this).text().replace(/hide/, "show"));
            $(this).parents(".sourceCode").find("div.code").hide();
        });
        $("a.sourceLink").click(function () {
            $(this).attr("target", "_blank");
        });
    });
})(window.jQuery);