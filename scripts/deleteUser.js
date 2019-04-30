$(function() {

    $(".deleteUserButton").click(function() {
        var text = $(this).parent().parent().find("th").text();
        //alert(text);
    });

});