// Application module
var app = angular.module('crudApp',[]);
app.controller("DbController",['$scope','$http',function($scope,$http){

$scope.getAll = function(){
    $http({
        method: 'POST',
        url: 'api/gym/gymDetails.php'
    }).success(function(data){
               $scope.details = data;
      });
}




$scope.insertInfo = function (info) {
             // use $.param jQuery func9tion to serialize data from JSON
              var data = $.param({
                  customer_id: info.customer_id,
                  name:info.name,
                  type:info.type,
                  email:info.email,
                  phone:info.phone,
                  date_entered: info.date_entered
              });

              $http.post("api/gym/insertDetails.php", data, $scope.config).success(function(){
                // alert(data);
                $scope.getAll();
                $('#ModalLoginForm').modal('hide');
             });
}

/*$scope.clearModal = function() {
	$scope.empInfo = {};
    $scope.empInfo = {'gender' : 'male'};
    $scope.form.empList.$setPristine();
}*/

$scope.deleteInfo = function(info){
	         var data = $.param({
	             customer_id: info.customer_id
	         });

             resp=confirm("Delete this record - " +info.name);
             if (resp) {
              $http.post('api/gym/deleteDetails.php', data, $scope.config).success(function(data){
                alert(data);
               $scope.getAll();
              });
             }
}

$scope.editInfo = function(info){
  $scope.currentUser = info;
  $('#ModalForm').modal('show');
}

$scope.UpdateInfo = function(info){
	         var data = $.param({
		              customer_id: info.customer_id,
                  name: info.name,
                  type: info.type,
                  email: info.email,
                  phone:info.phone,
                  date_entered: info.date_entered
		     });

            $http.post('api/gym/updateDetails.php',data, $scope.config).success(function(){
              // alert(data);
               $scope.getAll();
               $('#ModalForm').modal('hide');
            });
}


$scope.getAll();
// $scope.empInfo = {'gender' : 'male'};
$scope.currentUser = {};
$scope.config = {
		 headers : {
			 'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
		 }
}



}]);