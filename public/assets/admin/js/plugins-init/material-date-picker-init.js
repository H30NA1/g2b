(function ($) {
    "use strict"


    // Calculate the date 18 years ago from today
    const eighteenYearsAgo = new Date();
    eighteenYearsAgo.setFullYear(eighteenYearsAgo.getFullYear() - 18);

    $('#mdate').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false,
        maxDate: eighteenYearsAgo
    });

    $('#timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        time: true,
        date: false
    });
    $('#date-format').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm'
    });

    $('#min-date').bootstrapMaterialDatePicker({
        format: 'DD/MM/YYYY HH:mm',
        minDate: new Date()
    });

})(jQuery);