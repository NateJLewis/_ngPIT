angular
    .module('ngPITApp')
    .config(function($stateProvider, $urlRouterProvider) {
        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: ngpitApi.app_dir + 'home/home.html',
                controller: 'HomeController as homeCtrl',

            })
            .state('posts', {
                url: '/blog',
                templateUrl: ngpitApi.app_dir + 'posts/posts.html',
                controller: 'PostsController as postsCtrl',

            })
            .state('singlePost', {
                url: '/:slug',
                templateUrl: ngpitApi.app_dir + 'posts/single/post.html',
                controller: 'PostController as postCtrl',

            })

    // $locationProvider.html5Mode(true);, $locationProvider
    $urlRouterProvider.otherwise('/');
});
