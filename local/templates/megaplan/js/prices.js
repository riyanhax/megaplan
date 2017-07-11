/**
 * Created by vladb on 19.06.2017.
 */
$(document).ready(function () {

    $(".plan").hover(function () {
        var planHeight = $(this).height();
        console.log('planHeight = '+planHeight);
        if ($(this).hasClass("selected_plan") === false) {
            $(this).parent().height(planHeight);
        }
        $(this).toggleClass("selected_plan");
        console.log($(this).parent().height());
    });


    var isPopupOpen = 0;
    var contentHeight = $('.prices').height();
    console.log('contentHeight ='+contentHeight);
    var popupHeight = $("#compare_plans").height();
    console.log('popupHeight ='+popupHeight);
    $("#compare_plans .close-popup").click(function () {
        $("#plansBlock").css("margin-top", -165+"px");
        $("#compare_plans").animate({
            top: "-100%",
        }, {
            duration: 600
        });
        isPopupOpen = 0;
        //console.log(isPopupOpen);
        $(".prices>div").css("display", "block").css("visibility", "visible");
        $(".prices").height("initial")/*.css("background-image", "url(/local/templates/megaplan/img/prices/lady-prices.png)").css("background-size", "contain").css("background-repeat", "no-repeat")*/;
        // console.log('isPopupOpen = '+isPopupOpen);
        // console.log('contentHeight ='+contentHeight);
        // console.log('popupHeight ='+popupHeight);
    });
    $(".button-compare").click(function (e) {
        e.preventDefault();
        $("#compare_plans").animate({
            top: "90px",
        }, {
            duration: 520
        });
        isPopupOpen = 1;
        $(".prices>div").css("display", "none").css("visibility", "hidden");
        $(".prices").height(popupHeight)/*.css("background", "none")*/;
        // console.log('isPopupOpen = '+isPopupOpen);
        console.log('contentHeight ='+contentHeight);
        console.log('popupHeight ='+popupHeight);
    });




    mediaMenu();
    setAnchor(getPlace());
    setPlace(getPlace());
    changePlace();
    // cloneChangePlaceButtons();
    function getPlace() {
        var questionHash;
        if (window.location.hash) {
            questionHash = window.location.hash; // Если ссылка содержит хэш, то переходим на якорь по этому хэшу
            // console.log('questionHash = '+questionHash)
        }
        else {
            questionHash = '#';
            // console.log('questionHash = '+questionHash)
        }
        //console.log(window.location.pathname);
        return questionHash;
        if (window.location.pathname === '/prices/') {
            if (questionHash === '#server_prices' || questionHash === '#cloud_prices') {
                var offsetTop = questionHash === '#' ? 0 : $('#plansBlock').offset().top - 165;

                $("body").stop().animate({
                    scrollTop: offsetTop
                }, 10);
            }
        }

    };
    function setAnchor(anchor) {
        if (window.location.pathname === '/prices/') {
            if (anchor === '#server_prices' || anchor === '#cloud_prices') {
                var offsetTop = anchor === '#' ? 0 : $('#plansBlock').offset().top - 165;

                $("body").stop().animate({
                    scrollTop: offsetTop
                }, 10);
            }
        }
    };

    function setPlace(place) {
        var place = place;
        if (place === '#') {
            $('.prices-content-buttons-choose > a:first-of-type').addClass('button-yellow').removeClass('button-tr');
            $('#cloud_prices').css('display', 'flex').css('visibility', 'visible');
            $('#cloud_prices_des').css('display', 'block').css('visibility', 'visible');
            $('#compare_plans_table th:nth-of-type(2)').css('display', 'table-cell').css('visibility', 'visible');
            $('#compare_plans_table td:nth-of-type(2)').css('display', 'table-cell').css('visibility', 'visible');
        }
        else if (place === '#cloud_prices') {
            $('.prices-content-buttons-choose > a:first-of-type').addClass('button-yellow').removeClass('button-tr');
            $('#cloud_prices').css('display', 'flex').css('visibility', 'visible');
            $('#cloud_prices_des').css('display', 'block').css('visibility', 'visible');
            $('#server_prices').css('display', 'none').css('visibility', 'hidden');
            $('#server_prices_des').css('display', 'none').css('visibility', 'hidden');
            $('#compare_plans_table th:nth-of-type(2)').css('display', 'table-cell').css('visibility', 'visible');
            $('#compare_plans_table td:nth-of-type(2)').css('display', 'table-cell').css('visibility', 'visible');
        }
        else if (place === '#server_prices') {
            $('.prices-content-buttons-choose > a:last-of-type').addClass('button-yellow').removeClass('button-tr');
            $('#server_prices').css('display', 'flex').css('visibility', 'visible');
            $('#server_prices_des').css('display', 'block').css('visibility', 'visible');
            $('#cloud_prices').css('display', 'none').css('visibility', 'hidden');
            $('#cloud_prices_des').css('display', 'none').css('visibility', 'hidden');
            $('#compare_plans_table th:nth-of-type(2)').css('display', 'none').css('visibility', 'hidden');
            $('#compare_plans_table td:nth-of-type(2)').css('display', 'none').css('visibility', 'hidden');
            $('#compare_plans_table').css('width', '1080px');
        }
    }

    function changePlace(place) {
        $('.prices-content-buttons-choose > a').click(function (e) {
            e.preventDefault();
            $('.prices-content-buttons-choose > a').addClass('button-tr').removeClass('button-yellow');
            $(this).css('color', '#414b4d');
            $(this).addClass('button-yellow');
            var href = $(this).attr('href');
            if (href === place) {
                //console.log('равно');
                place = 0;
            }
            else {
                setPlace(href);
                place= 0;
            }
        })
    }
    // function cloneChangePlaceButtons() {
    //     console.log(window.innerWidth);
    //     if(window.innerWidth <=480){
    //         console.log('2');
    //         $('.banner-prices .change_place').prependTo('#plansBlock > div');
    //     }
    // }
    function mediaMenu() {
        console.log(window.innerHeight);
        $()
        if(window.innerHeight < 768){
            $('.menu-column').css('display','block').css('visibility','visible').css('width','25%');
            $('.capabilities').appendTo('.menu-col-1');
            $('.menu-prices').appendTo('.menu-col-2');
            $('.help').prependTo('.menu-col-2');
            $('.partners').appendTo('.menu-col-3');
            $('.company').prependTo('.menu-col-3');
            $('.blog').appendTo('.menu-col-4');
            $('.clients').prependTo('.menu-col-4');
        }
    }
});