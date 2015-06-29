/**
 * Created by matusko on 6/28/15.
 */

// sidebar
$(document).ready(function(){
    var wrapper = $(".sidebar-action-wrapper");

    wrapper.children(".sidebar-action-box").on("click", function(){
        if ($(this).parent().hasClass("active")){
            $(this).parent().removeClass("active");
        } else {
            $(wrapper).removeClass("active");
            $(this).parent().addClass("active");
        }
    });

    var close_button = $(".sidebar-action-close");

    close_button.on("click", function(){
        $(wrapper).removeClass("active");
    })
});

// popup
$(document).ready(function(){
    $("#popup-opener").on("click", function(){
        $(".overlay").show();
        $(".popup").show();
    });

    $(".overlay").on("click", function(){
        $(this).hide();
        $(".popup").hide();
    });

    $(".popup-close").on("click", function(){
        $(".overlay").hide();
        $(".popup").hide();
    });

});