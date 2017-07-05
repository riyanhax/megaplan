/**
 * Created by vladb on 19.06.2017.
 */

$(document).ready(function () {

    function setMenuHeight() {
        console.log('$(window).height() = ' + window.innerHeight);
        $('#menu').css({
            height: window.innerHeight + 'px'
        });
    }

    console.log('screen.width = ' + screen.width);
    console.log('screen.height = ' + screen.height);

    if (screen.width >= 768) {
        /*if (screen.height >= 768) {*/
            setMenuHeight();
            // $(window).resize(setMenuHeight);
        /*}*/
    }
    else {
        $('#menu').css("height", "auto");
    }

    $(".plan").hover(function () {
        var planHeight = $(this).height();
        if ($(this).hasClass("selected_plan") === false) {
            $(this).parent().height(planHeight);
            /*$(this).parent().css("opacity", "1");*/
        }
        else {
            // $(this).parent().css("opacity", "0.85");
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
        $(".main-content>div").css("display", "block").css("visibility", "visible");
        $(".main-content").height("initial").css("background-image", "url(/local/templates/megaplan/img/prices/lady.png)").css("background-size", "contain").css("background-repeat", "no-repeat");
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
        $(".main-content>div").css("display", "none").css("visibility", "hidden");
        $(".main-content").height(popupHeight).css("background", "none");
    });

    var bannerHeight = $(".banner-prices").height() - 35;
    console.log("bannerHeight = " + bannerHeight);
    var top = 0;
    if ($(document).width() >= 768) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > bannerHeight) {
                $(".plans > div:first-of-type").css("margin-top", "0px");
            }
            else {
                $(".plans > div:first-of-type").css("margin-top", "-160px");
            }
        })
    }
    //логика смены цены(я предпологаю, что цены будут тянуться из инфоблока массивом)
    var cloudPrices =[0,330,430,550,750];/*пример, при интеграции закоментить значения*/
    var serverPrices =[1000,3300,4300,5500,7500];/*пример, при работе закоментить*/
    $('#cloud').click(function (e) {
        e.preventDefault();
        $(this).css('color','#414b4d');

        var elems = $('.plans .plan_price span:first-of-type');
        for(var i = 0; i < elems.length; i++){
            elems[i].innerHTML = cloudPrices[i];
        }
    });
    $('#server').click(function (e) {
        e.preventDefault();
        $(this).css('color','#414b4d');

        var elems = $('.plans .plan_price span:first-of-type');
        for(var i = 0; i < elems.length; i++){
            elems[i].innerHTML = serverPrices[i];
        }
    })
});