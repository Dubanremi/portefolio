
$(document).ready(function(){
    $("body > div").click(function(){
        $(this).children("div").toggle();
    });
});
