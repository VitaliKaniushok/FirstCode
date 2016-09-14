$(document).ready(function() {
    function col() {
        var
        max = $(window).height(),
            footer = $('#footer').height(),
            content = 0;
        content = (max - footer);

        $('#container').height(content);

    }
    col();
    $(window).resize(function() {
        col();
    })
})