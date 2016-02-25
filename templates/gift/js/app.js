
var app = angular.module('gift', []);

app.controller('GiftController', ['$scope', '$http', '$location', '$interval',  '$timeout', '$window', function ($scope, $http, $location, $interval, $timeout, $window) {

    $scope.destination = '0';
    $scope.amount = '50';

    $scope.mobile = '';
    $scope.email = '';

    $scope.sender_fullname = '';
    $scope.sender_email = '';

    $scope.text = '';

    $scope.date = '0000-00-00';

    $scope.d = '';
    $scope.m = '';
    $scope.y = '';
    $scope.h = '';
    $scope.mm = '00';

    $scope.setFullDate = function( d, m, y, h ){
        $scope.d = d;
        $scope.m = m;
        $scope.y = y;
        $scope.h = h;
    }



    $scope.setDestination = function( destination ){
        $scope.destination = destination;
    }

    $scope.setDate = function( date ){
        $scope.d = date;
    }

    $scope.setMonth = function( month ){
        $scope.m = month;
    }

    $scope.setHour = function( hour ){
        $scope.h = hour;
    }

    $scope.setYear = function( year ){
        $scope.y = year;
    }

}]);