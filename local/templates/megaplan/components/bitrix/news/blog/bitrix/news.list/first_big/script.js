var obBlog = {

    showList: function () {
        var $rubricList = $("[data-rubric-list]");

        $rubricList.show();
    },

    hideList: function () {
        var $rubricList = $("[data-rubric-list]");

        $rubricList.hide();
    },

    viewPosts: function () {
        var $hiddenPosts = $("[data-posts-list]");
        var $hideButton = $("[data-hide-blog]");
        var $viewButton = $("[data-view-posts]");

        $viewButton.hide();
        $hiddenPosts.show();
        $hideButton.show();
    },

    hidePosts: function () {
        var $hiddenPosts = $("[data-posts-list]");
        var $hideButton = $("[data-hide-blog]");
        var $viewButton = $("[data-view-posts]");

        $hiddenPosts.hide();
        $hideButton.hide();
        $viewButton.show();
    }

};
