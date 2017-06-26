/**
 * Created by vladb on 19.06.2017.
 */
$(document).ready(function () {
    $(".plan").hover(function () {
        var planHeight = $(this).height();
        if($(this).hasClass("selected_plan") == false){
            $(this).parent().height(planHeight);
        }
        $(this).toggleClass("selected_plan");
        console.log($(this).parent().height());
    });


    var isPopupOpen = 0;
    var contentHeight = $(".main-content").height();
    console.log(contentHeight);
    var popupHeight = $("#compare_plans").height();
    console.log(popupHeight);
    $("#compare_plans .close_popup a").click(function () {
        $("#compare_plans").animate({
            top: "-100%",
        }, {
            duration: 600
        });
        isPopupOpen = 0;
        console.log(isPopupOpen);
        $(".main-content>div").css("display","block").css("visibility","visible");
        $(".main-content").height("initial").css("background-image","url(/local/templates/megaplan/img/prices/lady.png)").css("background-size","contain").css("background-repeat","no-repeat");
    });
    $(".button-compare").click(function () {
        $("#compare_plans").animate({
            top: "90px",
        }, {
            duration: 520
        });
        isPopupOpen = 1;
        console.log(isPopupOpen);
        console.log(contentHeight);
        console.log(popupHeight);
        $(".main-content>div").css("display","none").css("visibility","hidden");
        $(".main-content").height(popupHeight).css("background","none");
    });
});