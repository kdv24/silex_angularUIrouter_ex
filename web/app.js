var thinger = angular.module('thinger', ['ui.router']);

thinger.config(function($stateProvider) {
    $stateProvider.state('home', {
        url: "",
        templateUrl: "partials/home.html",
        controller: 'OhgodhelpCtrl'
    });

    $stateProvider.state('list', {
        url: "/list",
        templateUrl: "partials/list.html",
        controller: 'OhgodhelpCtrl'
    });

});
