// $http for ajax call
angular.module('CWG')
.controller('SignupCtrl', ['$scope', '$http', function($scope, $http){

    $scope.registration = {
        user_name: '',
        user_email: '',
        user_phone:'',
        user_password:'',
    };
    $scope.registrationSubmit = function(registrationData){
        
        // debug/check if the function works properly
        console.log('Form Submitted'); 
        console.log(registrationData);

        // Configure Ajax Call
        // GET/ POST/ PUT / DELETE
        // data is the form data and need to be serialized
        // finally modify the header content type
        // otherwise codeigniter will fail to catch the post data
        $http({
            method: 'post',
            data: $.param(registrationData),
            url: 'api/registration/create_user',
            headers: {
                'Content-Type':'application/x-www-form-urlencoded'
            }
        })
        .then(function(response){
            console.log(response.data);
            // reset as empty form
            // $setPristine() reset the form to initial state
            // so that Validation message hide 
            if(response.data.success === true){
                $scope.registration = {
                    user_name: '',
                    user_email: '',
                    user_phone:'',
                    user_password:'',
                };
                $scope.registrationForm.$setPristine();
            }
            alert(response.data.message);
        }, function(response){
            console.log(response.data);
            alert('Registration Failed! Try again later.')
        });

    }
}]);