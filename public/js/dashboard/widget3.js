"use stict";
$(document).ready(function () {
    var options = {
        useEasing: true,
        useGrouping: true,
        decimal: '.',
        prefix: '',
        suffix: ''
    };
    new CountUp("ganados", 0, 25, 0, 5.0, options).start();
    new CountUp("cotizados", 0, 17, 0, 5.0, options).start();
    new CountUp("negociados", 0, 8, 0, 5.0, options).start();
    new CountUp("rechazados", 0, 46, 0, 5.0, options).start();

    var imgHeight=$(".left_align_img").height();
    $(".left_image").css("height",imgHeight);
});