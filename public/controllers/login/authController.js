(function() {

	'use strict';

	var authController = angular.module('authController',[])
    .controller('authController',['$scope','$auth','$state', '$http', '$rootScope', function ($scope, $auth, $state, $http , $rootScope){
		
		$scope.loginError = false;
		$scope.loginErrorText;

		$scope.login = function(){
			var credentials = {
				email: $scope.email,
				password: $scope.password
			}

			$auth.login(credentials)
			.then(function(){
				//$state.go('home', {});
				return $http.get('api/authenticate/user');
			
				}, function(error){
					$scope.loginError = true;
					$scope.loginErrorText = error.data.error;
			})
			.then(function(response){
				var user = JSON.stringify(response.data.user);
				localStorage.setItem('user', user);
				$rootScope.authenticated = true;
				$rootScope.currentUser = response.data.user;
				$state.go('users');
				//$state.go('home');
			});
		}

        $scope.loginPage = true;
        $( "#loginPage" ).last().addClass( "active" );

		$scope.showRegisterPage = function(){
			$scope.registerPage = true;
			$scope.loginPage = false;
			$( "#registerPage" ).last().addClass( "active" );
			$( "#loginPage" ).last().removeClass( "active" );
		}

		$scope.showLoginPage = function(){
			$scope.registerPage = false;
			$scope.loginPage = true;
			$( "#loginPage" ).last().addClass( "active" );
			$( "#registerPage" ).last().removeClass( "active" );
		}
	}]);
})();