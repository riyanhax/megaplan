var obPartnersList = {

    viewCatalog: function () {
        var $hiddenPartners = $("[data-partners-list]");
        var $hideButton = $("[data-hide-partners]");
        var $viewButton = $("[data-view-partners]");

        $viewButton.hide();
        $hiddenPartners.show();
        $hideButton.show();
    },

    hideCatalog: function () {
        var $hiddenPartners = $("[data-partners-list]");
        var $hideButton = $("[data-hide-partners]");
        var $viewButton = $("[data-view-partners]");

        $hiddenPartners.hide();
        $hideButton.hide();
        $viewButton.show();
    },

    viewRef: function () {
        var $hiddenRef = $("[data-ref-block]");
        var $hideButton = $("[data-hide-ref]");
        var $viewButton = $("[data-view-ref]");

        $viewButton.hide();
        $hiddenRef.show();
        $hideButton.show();
    },

    hideRef: function () {
        var $hiddenRef = $("[data-ref-block]");
        var $hideButton = $("[data-hide-ref]");
        var $viewButton = $("[data-view-ref]");

        $hiddenRef.hide();
        $hideButton.hide();
        $viewButton.show();
    }
};