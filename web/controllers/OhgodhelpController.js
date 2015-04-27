thinger.controller('OhgodhelpCtrl', function OhgodhelpCtrl($scope, $state, OhgodhelpFactory) {
    $scope.stuvv = OhgodhelpFactory.stuvv;
    $scope.OhgodhelpFactory = OhgodhelpFactory;

    $scope.getStuvv = function() {
        $state.go('list');
    };

    $scope.switchType = function($item) {
        $scope.OhgodhelpFactory.switchType($item);
    };
});
