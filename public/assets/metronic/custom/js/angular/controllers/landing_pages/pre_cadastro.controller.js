angular.module('app_landing').controller('landing_ctrl', ['$scope', '$http', 'precadastroService', function ($scope, $http) {

    $scope.email;
    $scope.success = false;

    myBox = $('.content-modal-pre-cad');
    backgroung = $('.content-img-background');
    footer = $('.content-footer');
    successM = $('.cad-text');
    var base = $('.base_url').val();


    myBox.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function(e) {


            myBox.addClass('content-modal-pre-cad-size');
        });

    backgroung.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function(e) {


            backgroung.addClass('show-background');
        });

    footer.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function(e) {


            footer.addClass('show-background');
        });

    // backgroung.mousemove(function(e) {
    //     parallaxIt(e, backgroung, -30);
    // });
    //
    // function parallaxIt(e, target, movement) {
    //     var $this = backgroung;
    //     var relX = e.pageX - $this.offset().left;
    //     var relY = e.pageY - $this.offset().top;
    //
    //     TweenMax.to(target, 1, {
    //         x: (relX - $this.width() / 2) / $this.width() * movement,
    //         y: (relY - $this.height() / 2) / $this.height() * movement
    //     });
    // }

    $scope.cadastro = function () {


        $http({

            method: 'POST',
            url: base + "home/pre_cadastro",
            data: $.param({email_pre_cadastro: $scope.email}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

            $scope.success = true;
            $scope.email = '';

                successM.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
                    function(e) {


                        successM.addClass('cad-success-ended');
                    });
        }
        );

    }

}]);