var obPartners = {

    viewMore: function () {
        var $hiddenClients = $("[data-other-clients]");
        var $hideButton = $("[data-hide-more]");
        var $viewButton = $("[data-view-more]");

        $viewButton.hide();
        $hiddenClients.show();
        $hideButton.show();
    },

    hideMore: function () {
        var $hiddenClients = $("[data-other-clients]");
        var $hideButton = $("[data-hide-more]");
        var $viewButton = $("[data-view-more]");

        $hiddenClients.hide();
        $hideButton.hide();
        $viewButton.show();
    }
};