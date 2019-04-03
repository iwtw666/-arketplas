$(document).ready(function() {

    $("#remember").click(function(){
        if ($(this).is(":checked")) {
            alert("You will be remembered!");
        }
    })

});