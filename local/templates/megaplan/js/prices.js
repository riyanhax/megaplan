/**
 * Created by vladb on 19.06.2017.
 */
// $(document).load(function() {

/*else {
        questionHash = '#index'; // Если хэша нет, то переходим на якорь index
    }

    var offsetTop = questionHash === '#' ? 0 : $(questionHash).offset().top - 100;

    $("html,body").stop().animate ({
        scrollTop: offsetTop
    }, 10);*/
// });
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

    //логика смены цены(я предпологаю, что цены будут тянуться из инфоблока массивом)
    var cloudPrices =[0,330,430,550,750];/*пример, при интеграции закоментить значения*/
    var cloudDescription=['1st','2nd','3rd','4th','5th'];
    var serverPrices =[5300,7300,9500,12500];
    var serverDescription = ['1','2','3','4'];/*пример, при работе закоментить*/
    // $('#cloud').click(function (e) {
    //     e.preventDefault();
    //     $(this).css('color','#414b4d');
    //
    //     var elems = $('.plans .plan_price span:first-of-type');
    //     for(var i = 0; i < elems.length; i++){
    //         elems[i].innerHTML = cloudPrices[i];
    //     }
    // });
    // $('#server').click(function (e) {
    //     e.preventDefault();
    //     $(this).css('color','#414b4d');
    //
    //     var elems = $('.plans .plan_price span:first-of-type');
    //     for(var i = 0; i < elems.length; i++){
    //         elems[i].innerHTML = serverPrices[i];
    //     }
    // })
    // }
    var questionHash;
    if (window.location.hash) {
        questionHash = window.location.hash; // Если ссылка содержит хэш, то переходим на якорь по этому хэшу
        console.log(questionHash)
    }
    else {
        questionHash = '#';
    }
    console.log(window.location.pathname);
    if(window.location.pathname === '/prices/'){
        if(questionHash === '#server_prices' || questionHash === '#cloud_prices'){
            var offsetTop = questionHash === '#' ? 0 : $('#test').offset().top - 160;

            $("html,body").stop().animate ({
                scrollTop: offsetTop
            }, 10);
        }
    }

    getPlace(questionHash);
    changePlace();
    function getPlace(place) {
        var place = place;
        if(place === '#'){
            $('#cloud_prices').css('display','flex').css('visibility','visible');
        }
        // else {
        //     $(place).css('display','flex').css('visibility','visible');
        // }
        else if(place === '#cloud_prices'){
            $('#cloud_prices').css('display','flex').css('visibility','visible');
            $('#server_prices').css('display','none').css('visibility','hidden');
        }
        else if(place === '#server_prices'){
            $('#server_prices').css('display','flex').css('visibility','visible');
            $('#cloud_prices').css('display','none').css('visibility','hidden');
        }
    }
    function changePlace() {
        $('.change_place a').click(function (e) {
            e.preventDefault();
            $(this).css('color','#414b4d');
            var href = $(this).attr('href');
            if(href === questionHash){
                console.log('равно');
                questionHash = 0;
            }
            else {
                getPlace(href);
                questionHash = 0;
            }
        })
    }
});