//Define an angular module for our app
var app = angular.module('ubtApp', ['ui.bootstrap']);

app.controller('ubtCtrl', function ($scope, $http) {
    getMakes(); // Load all countries with capitals
    
    
    function getMakes() {
        $http.get("/api/make").success(function (data) {
            $scope.makes = data;
        });
    };
    
    $scope.$watch(function (scope) {
        return scope.selectedMake
    },
    function (newValue, oldValue) {
        if (typeof(newValue) === 'object') {
            $scope.makeNiceName = newValue.nice_name;
            $http.get("/api/model/"+newValue.id).success(function (data) {
                $scope.models = data;
            });
        }
    });
    $scope.$watch(function (scope) {
        return scope.selectedModel
    },
    function (newValue, oldValue) {
        if (typeof(newValue) === 'object') {
            $scope.modelNiceName = newValue.nice_name;
            
            
            
            /**
             * Because the Media API is not working and giving the Authentication Error,
             * I have used a the static photo from edmunds
             * 
             */
            $scope.bgPhoto = 'http://media.ed.edmunds-media.com/honda/civic/2014/oem/2014_honda_civic_sedan_hybrid_cc_oem_1_1600.jpg';
            
            /**
             * If the API was working, I would have made call the the API route for fetching the image via http service
             * and set it in scope variable as shown below
             */
//            $http.get("/api/photo/"+selectedMake+'/'+selectedModel).success(function (data) {
//                $scope.bgPhoto = data;
//            });
        }
    });

});
//# sourceMappingURL=app.js.map
