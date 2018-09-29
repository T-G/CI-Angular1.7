angular.module('CWG')
.controller('LoginCtrl', ['$scope', '$http', function($scope, $http){
    $scope.login = {
        email='',
        password = ''
    };

    $scope.loginSubmit = function(login){
        $http({
            method: 'post',
            data: $.param({
                email: login.email,
                password: login.password
            }),
            url: 'api/login/verify',
            'Content-Type': 'application/x-www-form-urlencoded'
        })
        .then(function(response){
            console.log(response.data);
            UserService.setUserData(Response.data);
            alert(response.data.message);
        }, function(response){
            console.log(response.message);
        });
    }

}]);