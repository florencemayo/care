var patientController = angular.module("patientController",[])
    .controller('patientController', ['$scope','$http', 'API_URL', function ($scope, $http, API_URL) {
        console.log("Patient Search Controller");
        
        $scope.showAlert =  false;

        $scope.allPatients = []; 
        var getAllPatients = function(){
            $http.get(API_URL+ "patients").success(function (data){
                    $scope.allPatients = data;
            });
        };
        getAllPatients();
        $scope.searchedValue = " ";

        var capitalizeFirstLetter = function(value){
            if(angular.isNumber(value) == false){
                value =value.toLowerCase();
                value = value.substring(0,1).toUpperCase()+value.substring(1);
            }
            return value;
        }

        var existPatient = function(searchValue){
            $scope.patients = [];
            if (checkValue(searchValue) == false) {
            searchValue = capitalizeFirstLetter(searchValue);
            for (var i=0; i<$scope.allPatients.length; i++){
                    if ($scope.allPatients[i].first_name == searchValue ||
                        $scope.allPatients[i].last_name == searchValue ||
                        $scope.allPatients[i].identification_code == searchValue){
                        $scope.patients.push($scope.allPatients[i]);
                     }
                }
            }else{
                $scope.patients=[];
            }
        }
        
        var checkValue = function(val){
            return angular.isUndefined(val) || val===null;
        };
       
        $scope.searchPatient = function(value){
             $scope.showAlert = true;
             existPatient(value);
             $scope.searchedValue = value;
        }

        /*document.getElementById('findPatient').onkeypress = function(e){
            angular.element(document).ready(function () {
                if (!e) e = window.event;
                var keyCode = e.keyCode || e.which;
                if (keyCode == '13'){
                    var searchField = $("#findPatient");
                    searchValue = searchField.val();
                    if (checkValue(searchValue) == false) {
                        $scope.showAlert = true;
                        console.log("Search Item: " + searchValue);
                        $scope.searchedValue = searchValue; 
                        existPatient(searchValue);
                    }
                    return false;
                }
            });
        }*/
        
        //$scope.showIdentificationField = false;
        //$scope.showMobileNumberField = false;
}]);
