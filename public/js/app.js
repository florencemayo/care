angular.module("excelAnalyser",[
        'ui.router', 
        'satellizer',
        'ngSanitize',
        'excelAnalyserDirectives',
        'excelAnalyserControllers',
        'excelAnalyserServices',
        'excelAnalyserFilters',
        'mgcrea.ngStrap',
        'ngAnimate',
        'angular-spinkit',
        'multi-select-tree',
        'highcharts-ng',
        'angularUtils.directives.dirPagination',
        'ngCsv'
])
    .run( function($rootScope, $state) {
        $rootScope.$on( '$stateChangeStart', function(event, toState) {
            var user = JSON.parse(localStorage.getItem('user'));
            if (user) {
                $rootScope.authenticated = true;
                $rootScope.currentUser = user;

                if (toState.name === "auth") {
                    event.preventDefault();
                    $state.go('users');
                }
            }
        });
    })
    .config( function($stateProvider, $urlRouterProvider, $authProvider, $httpProvider, $provide){
        
        $urlRouterProvider.otherwise('/auth');

        function redirectWhenLoggedOut($q, $injector){
            return {
                responseError: function(rejection){
                    var $state = $injector.get('$state'); 
                    var rejectionReasons = ['token_not_provided', 'token_expired', 'token_invalid', 'token_absent'];
                    angular.forEach(rejectionReasons, function(value, key){
                        if (rejection.data.error === value) {
                            localStorage.removeItem('user');
                            $state.go('auth');
                        }
                    });
                    return $q.reject(rejection);
                }
            }
        }

        $provide.factory('redirectWhenLoggedOut', redirectWhenLoggedOut);
        $httpProvider.interceptors.push('redirectWhenLoggedOut');

        $authProvider.loginUrl = '/api/authenticate';

        $stateProvider
            .state('auth', {
                url: '/auth',
                templateUrl: 'views/authView.html',
                controller: 'authController'
            }).state('users', {
                url: '/users',
                templateUrl: 'views/userView.html',
                controller: 'userController'
            }).state('home',{
                url: '/home',
                templateUrl: 'views/home.html',
                controller: 'mainController'
            }).state('metadata',{
                url: '/metadata',
                templateUrl: 'views/metadata.html',
                controller: 'mainController'
            });;
    })
    .constant('API_URL', 'http://localhost/web_excel_analyser/public/index.php/');
