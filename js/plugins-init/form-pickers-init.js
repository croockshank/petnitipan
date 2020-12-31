(function($) {
    "use strict"

    $('#date-format').bootstrapMaterialDatePicker({
        format: 'ddd, DD MMM YYYY HH:mm',
        nowButton: true,
        lang: 'id'
    });

    $('#date-only').bootstrapMaterialDatePicker({
        time: false,
        format: 'ddd, DD MMM YYYY',
        nowButton: true,
        lang: 'id'
    });

})(jQuery);