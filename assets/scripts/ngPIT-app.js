var app = angular.module('tvkApp', [
    'ngAnimate',
    'ngResource',
    'ngSanitize',
    'ui.router',
    'ngCart'
]);

app.run(function($rootScope, $state, $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
});

app.config(function($stateProvider, $urlRouterProvider) {
    $stateProvider
        .state('home', {
            url: '/',
            templateUrl: tvkApi.partials_dir + 'home.html',
            controller: 'HomeController as homeCtrl',

        })
        .state('categories', {
            url: '/treats',
            templateUrl: tvkApi.partials_dir + 'categories.html',
            controller: 'CategoriesController',
            controllerAs: 'categoriesCtrl',
        })
        .state('ourStory', {
            url: '/our-story',
            templateUrl: tvkApi.partials_dir + 'our-story.html',
            controller: 'OurStoryController as ourStoryCtrl',
        })
        .state('press', {
            url: '/in-the-press',
            templateUrl: tvkApi.partials_dir + 'in-the-press.html',
            controller: 'PressController as pressCtrl',
        })
        .state('postsList', {
            url: '/social-media',
            templateUrl: tvkApi.partials_dir + 'posts-list.html',
            controller: 'PostListController as postListCtrl',
        })
        .state('cart', {
            url: '/cart',
            // controller: 'TvkCartController',
            templateUrl: tvkApi.partials_dir + 'tvk-cart.html',
        })
        .state('checkout', {
            url: '/checkout',
            controller: 'TvkCheckoutController',
            templateUrl: tvkApi.partials_dir + 'tvk-checkout.html',
        })
        .state('palette', {
            url: '/palette',
            // controller: 'SinglePostController as singlePostCtrl',
            templateUrl: tvkApi.partials_dir + 'palette.html',
        })
        .state('products', {
            url: '/:categorySlug',
            controller: 'ProductsController as productsCtrl',
            templateUrl: tvkApi.partials_dir + 'products.html',
        })
        .state('singlePost', {
            url: '/:postSlug',
            controller: 'SinglePostController as singlePostCtrl',
            templateUrl: tvkApi.partials_dir + 'single-post.html',
        })

    // $locationProvider.html5Mode(true);, $locationProvider
    $urlRouterProvider.otherwise('/');
});

app.controller('HomeController', ['$sce', '$location', '$http', 'ngCart',
    function($sce, $location, $http, ngCart) {

        this.subhero_heading = tvkApi.homepage.subhero_heading;
        this.subhero_content = tvkApi.homepage.subhero_content;
        this.subhero_cta = tvkApi.homepage.subhero_cta;

        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };

    }
]);

app.controller('CategoriesController', ['$sce', '$location', '$http', 'ngCart',
    function($sce, $location, $http, ngCart) {

        this.categories = tvkApi.product_cats;
        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };

    }
]);

app.controller('OurStoryController', ['$sce', '$location', '$http', 'ngCart',
    function($sce, $location, $http, ngCart) {

        this.ourstory_heading = tvkApi.homepage.ourstory_heading;
        this.ourstory_content = tvkApi.homepage.ourstory_content;
        this.ourstory_cta = tvkApi.homepage.ourstory_cta;

        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };

    }
]);

app.controller('PressController', ['$sce', '$location', '$http', 'ngCart',
    function($sce, $location, $http, ngCart) {

        this.in_the_press_heading = tvkApi.homepage.in_the_press_heading;
        this.in_the_press_content = tvkApi.homepage.in_the_press_content;
        this.in_the_press_cta = tvkApi.homepage.in_the_press_cta;

        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };

    }
]);

app.controller('PostListController', ['$sce', '$location', '$http', 'ngCart',
    function($sce, $location, $http, ngCart) {
        this.postList = tvkApi.posts;
        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };
    }
]);

app.controller('TvkCartController', ['$location', '$http', 'ngCart',
    function($location, $http, ngCart) {

    }
]);

app.controller('TvkCheckoutController', ['$location', '$http', 'ngCart',
    function($location, $http, ngCart) {

    }
]);

app.controller('ProductsController', ['$stateParams', '$sce', '$location', '$http', 'ngCart',
    function($stateParams, $sce, $location, $http, ngCart ) {
        this.categorySlug = $stateParams.categorySlug;
        this.products = tvkApi.products;
        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };

    }
]);

app.controller('SinglePostController', ['$stateParams', '$sce', '$location', '$http', 'ngCart',
    function($stateParams, $sce, $location, $http, ngCart) {
        this.postSlug = $stateParams.postSlug;
        this.postList = tvkApi.posts;
        this.getHtml = function(string) {
            if (string) {
                return $sce.trustAsHtml(string);
            }
        };
    }
]);

app.directive('tabs', function() {
    return {
        restrict: 'E',
        transclude: true,
        scope: {},
        controller: ["$scope", function($scope) {
            var panes = $scope.panes = [];

            $scope.select = function(pane) {
                angular.forEach(panes, function(pane) {
                    pane.selected = false;
                });
                pane.selected = true;
            }

            this.addPane = function(pane) {
                if (panes.length == 0) $scope.select(pane);
                panes.push(pane);
            }
        }],
        template:
            '<div class="product_tabs">' +
                '<div class="tab-content" ng-transclude></div>' +
                '<ul class="nav nav-tabs nav-justified info_tabs">' +
                    '<li class="nav-item info_tab_item" ng-repeat="pane in panes" ng-class="{active:pane.selected}">' +
                        '<a class="nav-link info_tab_link" href="" ng-click="select(pane)">{{pane.title}}</a>' +
                    '</li>' +
                '</ul>' +
            '</div>',
        replace: true
    };
});
app.directive('pane', function() {
    return {
        require: '^tabs',
        restrict: 'E',
        transclude: true,
        scope: {
            title: '@'
        },
        link: function(scope, element, attrs, tabsCtrl) {
            tabsCtrl.addPane(scope);
        },
        template:
            '<div class="tab-pane" ng-class="{active: selected}" ng-transclude>' +
            '</div>',
        replace: true
    };
});

(function($) {
    "use strict";
    $(document).ready(function() {

        $('#user_login').attr('placeholder', 'Username');
        $('#user_pass').attr('placeholder', 'Password');

        $(window).scroll(function() {
            var scroll = $(window).scrollTop(),
                body = $("body");

            if (scroll > 0) {
                body.addClass("header_small").removeClass("header_tall");
            } else {
                body.addClass("header_tall").removeClass("header_small");
            }
        });

        // $('[data-toggle="drawer"]').click(function(e) {
        //     e.preventDefault();
        //     var self = $(this),
        //         target = self.data('target');
        //
        //     if (self.hasClass('active')) {
        //         self.removeClass('active')
        //         $('.drawer').addClass('fold');
        //     } else {
        //         $('.dropdown').removeClass('open');
        //         $(target).toggleClass('fold')
        //         self.removeClass('active');;
        //     }
        // });
        $('[data-toggle="drawer"]').click(function(e) {
            e.preventDefault();
            var self = $(this),
                target = self.data('target');

            $('.drawer').addClass('fold');
            $('.dropdown').removeClass('open');
            $(target).toggleClass('fold');
        });

        $('[data-toggle="tab"]').click(function(e) {
            e.preventDefault();
            var self = $(this),
                target = self.data('target');

            $('[data-toggle="tab"], .tab-pane').removeClass('active');

            self.addClass('active');
            $(target).addClass('active');
        });

        $('#products').on('click', '.info_tab_btn', function(e) {
            e.preventDefault();
            var button = $(event.relatedTarget),
                target = button.data('target');

            $('.btn.' + target).siblings().removeClass('active');
            $('.btn.' + target).addClass('active');

            $('#' + target).siblings().removeClass('active');
            $('#' + target).addClass('active');
            console.log(button);
            console.log(target);
        });

        $('[data-toggle="dropdown"]').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');

            $('.drawer').addClass('fold');
            $(target).toggleClass('open');
        });

        $('[data-toggle="accordion"]').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $(target).toggleClass('show');
            $(this).toggleClass('active');
        });

        $('.close-drawer').click(function(e) {
            e.preventDefault();
            $('.drawer').addClass('fold');
        });
    });

})(jQuery);



// angular.forEach(tvkApi.products, function(value, key) {
//     this.details = 'details_' + value.id;
//     this.description = 'description_' + value.id;
//     this.nutrition = 'nutrition_' + value.id;
// })
// this.products     = tvkApi.products;
// this.showProducts = false;
// this.catSlug      = false;

// this.catSlug = function(catSlug){
//     this.categorySlug = catSlug;
//     return this.categorySlug;
//     console.log(catSlug)
// };
// this.showProducts = false;
// this.catSlug      = false;

// this.catSlug = function(catSlug){
//     this.categorySlug = catSlug;
//     return this.categorySlug;
//     console.log(catSlug)
// };
// this.categories   = tvkApi.product_cats;
// $( '.home-link' ).click(function(e) {
//     e.preventDefault();
//
//     var self = $(this),
//         href = self.data("href"),
//         $target = $(href),
//         headerHeight = $('#main-header').height();
//
//     $("html, body").stop().animate({
//
//         "scrollTop": $target.offset().top - headerHeight
//
//     }, 800, "swing");
//
// });
