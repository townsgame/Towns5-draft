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

// popup story
$(document).ready(function(){
    $("#popup-story-trigger").on("click", function(){
        $(".overlay").show();
        $(".popup-story-wrapper").show();
    });

    $(".overlay").on("click", function(){
        $(this).hide();
        $(".popup-story-wrapper").hide();
    });

    $(".popup-story-close").on("click", function(){
        $(".overlay").hide();
        $(".popup-story-wrapper").hide();
    });

});

// popup notification
$(document).ready(function(){
    $("#popup-notification-trigger").on("click", function(event){
        event.stopPropagation();
        $(".popup-notification-wrapper").toggle();
    });

    $(".popup-notification-wrapper").on("click", function(event){
        event.stopPropagation();
    });

    $(document).on("click", function(){
        $(".popup-notification-wrapper").hide();
    });
});
