$(function() {

    $(".deleteUserButton").hover(function() {
        $(this).parent().parent().css("background-color", "red");
    }, function() {
        $(this).parent().parent().css("background-color", "white");
    });

    $(".updateUserButton").hover(function() {
        $(this).parent().parent().css("background-color", "blue");
    }, function() {
        $(this).parent().parent().css("background-color", "white");
    });

    $(".addUserButton").click(function(){
        $(this).toggle();
        $("#addUser").removeClass("d-none");
        $("input").removeClass("d-none");
        $("#lastName").focus();
        
    });

    $("#addUser").click(function() {
        if($("#lastName").val() != "" && $("#firstName").val() != "") {
            var url = "index.php/create?lastname=" + $("#lastName").val() + "&firstname=" + $("#firstName").val();
            $(this).attr("href", url);
        }
        else{
            alert("You must fill a first name and a last name please!");
        }
    });




});