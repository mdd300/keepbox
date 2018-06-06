angular.module('app_landing').controller('index_adm_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.users = []
    $scope.searchUsers = "";

    $http({

        method: 'POST',
        url: "getUsers",
        data: $.param({like: $scope.searchUsers, select: ""}),
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {


        $timeout(function () {
            $('#dataTable').DataTable();

        },200)
            console.log(response.data)

            $scope.users = response.data;


        }
    );

    $scope.getUser = function () {


        $http({

            method: 'POST',
            url: "getUsers",
            data: $.param({like: $scope.searchUsers, select: ""}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                $scope.users = response.data;

            }
        );
    }


}]);

angular.module('app_landing').controller('easypost_adm_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {
    $scope.tracking = [];
    $scope.key = "1xY09nysF4aof0ZqqSrvxw";
    $scope.TrackingCode = "";

    $scope.sendTracking = function () {
        $http({

            method: 'POST',
            url: "easypost_setTrack",
            data: $.param({track: $scope.TrackingCode}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data)

                $timeout(function () {
                    $('#dataTable').DataTable();

                },200)

                $scope.getTracking();

            }
        )
    }

    $scope.getTracking = function () {


        $http({

            method: 'POST',
            url: "easypost_getTrack",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data)

                $timeout(function () {
                    $('#dataTable').DataTable();

                }, 200)

                $scope.tracking = response.data.trackers;

            }
        );

    }
    $scope.getTracking();

}]);
angular.module('app_landing').controller('compra_adm_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {


    $scope.compra = [];

    $http({

        method: 'POST',
        url: "getCompra",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

            console.log(response.data)

            $timeout(function () {
                $('#dataTable').DataTable();

            }, 200)

            $scope.compra = response.data;

        }
    );



}]);
