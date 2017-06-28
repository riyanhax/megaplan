var obPartnersList = {

    viewMore: function () {
        var $hiddenPartners = $("[data-partners-list]");
        var $hideButton = $("[data-hide-partners]");
        var $viewButton = $("[data-view-partners]");

        $viewButton.hide();
        $hiddenPartners.show();
        $hideButton.show();
    },

    hideMore: function () {
        var $hiddenPartners = $("[data-partners-list]");
        var $hideButton = $("[data-hide-partners]");
        var $viewButton = $("[data-view-partners]");

        $hiddenPartners.hide();
        $hideButton.hide();
        $viewButton.show();
    }
};