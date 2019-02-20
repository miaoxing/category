define(function() {
    var Category = function () {

    };

    $.extend(Category.prototype, {
        generatePrefix: function (level) {
            if (level == 1) {
                return '';
            } else {
                return '|' + (new Array(parseInt(level, 10)).join('--'));
            }
        }
    });

    return new Category;
});