  var CWG =  angular
        .module('CWG', [
            'ngRoute',
            'oc.lazyLoad'
        ]);
        CWG.config(['$routeProvider', '$locationProvider',function($routeProvider, $locationProvider){
            
            $routeProvider
            .when('/', {
                templateUrl:'view/home/index',
                controller:'HomeCtrl',
                resolve:{
                    loadAssets: ['$ocLazyLoad', function($ocLazyLoad){
                        return $ocLazyLoad.load(['assets/js/controllers/HomeCtrl.js'])
                    }]
                }
            })
            .when('/about', {
                templateUrl:'view/about/index',
                controller:'AboutCtrl',
                resolve:{
                    loadAssets: ['$ocLazyLoad', function($ocLazyLoad){
                        return $ocLazyLoad.load(['assets/js/controllers/AboutCtrl.js'])
                    }]
                }
            })
            .when('/contact', {
                templateUrl:'view/contact/index',
                controller:'ContactCtrl',
                resolve:{
                    loadAssets: ['$ocLazyLoad', function($ocLazyLoad){
                        return $ocLazyLoad.load(['assets/js/controllers/ContactCtrl.js'])
                    }]
                }
            })
            .when('/signup', {
                templateUrl:'view/registration/index',
                controller:'SignupCtrl',
                resolve:{
                    loadAssets: ['$ocLazyLoad', function($ocLazyLoad){
                        return $ocLazyLoad.load(['assets/js/controllers/SignupCtrl.js'])
                    }]
                }
            })
            .when('/login', {
                templateUrl:'view/login/index',
                controller:'LoginCtrl',
                resolve:{
                    loadAssets: ['$ocLazyLoad', function($ocLazyLoad){
                        return $ocLazyLoad.load(['assets/js/controllers/LoginCtrl.js'])
                    }]
                }
            })
            .when('/error/:errorId', {
                templateUrl:'view/error/index',
                controller:'ErrorCtrl',
                resolve:{
                    loadAssets: ['$ocLazyLoad', function($ocLazyLoad){
                        return $ocLazyLoad.load(['assets/js/controllers/ErrorCtrl.js'])
                    }]
                }
            })
            .otherwise({redirectTo: '/error/404'});
            $locationProvider.html5Mode(true);
        }]);

        // .run([function(){
        //     (function(){
        //         if(document.getElementById('facebook-jssdk')){return;}
        //         var firstScriptElement = document.getElementsByTagName('script')[0];
        //         var facebookJS = document.getElement('script');
        //         facebookJS.id = 'facebook-jssdk';
        //         facebookJS.src = '//connect.facebook.net/en_US/all.js';
        //         firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
        //     }());
        // }])