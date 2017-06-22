/**
 * Created by vladb on 19.06.2017.
 */
$(document).ready(function () {
    $(".plan").hover(function () {
        $(this).toggleClass("selected_plan");
    });


    var isPopupOpen = 0;
    var contentHeight = $(".content").height();
    var popupHeight = $("#compare_plans").height();
    var topPopupHeight = popupHeight - popupHeight * 2;
    $("#compare_plans .close_popup a").click(function () {
        $("#compare_plans").animate({
            top: "-100%",
        }, {
            duration: 600
        });
        isPopupOpen = 0;
        console.log(isPopupOpen);
        $(".content>div").css("display","block").css("visibility","visible");
        $(".content").height("initial").css("background-image","url(/local/templates/megaplan/img/prices/lady.png)").css("background-size","contain").css("background-repeat","no-repeat");
    });
    $(".button_compare a").click(function () {
        $("#compare_plans").animate({
            top: "90px",
        }, {
            duration: 520
        });
        isPopupOpen = 1;
        console.log(isPopupOpen);
        console.log(contentHeight);
        console.log(popupHeight);
        $(".content>div").css("display","none").css("visibility","hidden");
        $(".content").height(popupHeight).css("background","none");
    });
})