$(document).ready(function() {
    $('.toggle').click((e) => {
        let target = $(e.currentTarget).data("target");
        let collapsedStatus = $(e.currentTarget).data("collapsed");

        if (collapsedStatus !== 'on') {
            $(target).addClass('slide-in');
            $(e.currentTarget).addClass('slide-in-toggler');
            $(e.currentTarget).data("collapsed", "on");
        }
        else {
            $(target).removeClass('slide-in');
            $(e.currentTarget).removeClass('slide-in-toggler');
            $(e.currentTarget).data("collapsed", "off");
        }
    });

})
