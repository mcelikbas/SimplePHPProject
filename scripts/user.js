$(function() {

    $(".deleteUserRow").hover(function() {
        $(this).parent().parent().css("background-color", "red");
    }, function() {
        $(this).parent().parent().css("background-color", "white");
    });

    $(".updateUserRow").hover(function() {
        $(this).parent().parent().css("background-color", "blue");
    }, function() {
        $(this).parent().parent().css("background-color", "white");
    });


    $(".addUserButton").click(function(){
        $(this).toggle();
        $("#addUser").removeClass("d-none");
        $("#new_lastName").removeClass("d-none");
        $("#new_firstName").removeClass("d-none");
    });

    $("#addUser").click(function() {
        var lastname = $("#new_lastName").val();
        var firstname = $("#new_firstName").val();
        if(lastname != "" && firstname != "") {
            var url = "index.php/create?lastname=" + lastname + "&firstname=" + firstname;
            $(this).attr("href", url);
        }
        else{
            alert("You must fill a first name and a last name please!");
        }
    });


    $(".updateUserButton").click(function(){
        $(this).toggle();
        $(this).parent().parent().find("input").removeClass("d-none");
        $(this).parent().parent().find("a").addClass("d-none");
        $(this).parent().find(".updateUser").removeClass("d-none");
    });

    $(".updateUser").click(function() {
        var lastname = $(this).parent().parent().find("#lastname").val();
        var firstname = $(this).parent().parent().find("#firstname").val();
        if(lastname != "" && firstname != "") {
            var url = $(this).attr("href") + "&lastname=" + lastname + "&firstname=" + firstname;
            $(this).attr("href", url);
        }
        else{
            alert("You must fill a first name and a last name please!");
        }
    });


});