angular.module('myApp', []).controller('myController', function($scope, $http){

});


myApp.controller('loginCtrl', function($scope){
	$scope.submit = function(){
		var username = $scope.username;
		var password = $scope.password;
		if($sccope.username == 'admin' && $scope.password == 'admin'){
			$location.path('/healthinfo');
		}else{
			alert("Your Patient ID or Password is Incorrect")
		}
	}
});