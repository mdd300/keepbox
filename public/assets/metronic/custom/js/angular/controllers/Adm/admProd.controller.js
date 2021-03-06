angular.module('app_landing').controller('prod_adm_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.produto = {
        "user": "",
        "prod_nome": "",
        "prod_quantidade": "",
        "prod_peso": "",
        "img": ""

    }
    $scope.prod_selected = [];
    $scope.users = [];
    $scope.Prods = [];


    $http({

        method: 'POST',
        url: "getProds",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

        $timeout(function () {
            $('#dataTable').DataTable();

        }, 200)

        $scope.Prods = response.data;


        }
    );

    $scope.imgModalSelect = function (img) {

        $scope.prod_selected = img

    }

    var $image;
    var vanilla
    var vanilla2

    document.getElementById('picField').onchange = function (evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

        // FileReader support
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                document.getElementById("image-crop").src = fr.result;
                $image = $('#image-crop')[0];


                vanilla = new Croppie($image, {
                    viewport: { width: 300, height: 300 },
                    boundary: { width: 500, height: 500 },
                    showZoomer: true,
                    enableResize: true,
                    enableOrientation: true,
                    mouseWheelZoom: 'ctrl'
                });



                $( "#rotateLeft" ).click(function() {
                    vanilla.bind({
                        url: fr.result,
                        orientation: 8
                    });
                });

                $( "#rotateRight" ).click(function() {
                    vanilla.bind({
                        url: fr.result,
                        orientation: 6
                    });
                });
                $( "#rotateDown" ).click(function() {
                    vanilla.bind({
                        url: fr.result,
                        orientation: 3
                    });
                });
                $( "#rotateUp" ).click(function() {
                    vanilla.bind({
                        url: fr.result,
                        orientation: 1
                    });
                });
            }
            fr.readAsDataURL(files[0]);
        }

        // Not supported
        else {
            // fallback -- perhaps submit the input to an iframe and temporarily store
            // them on the server until the user's session ends.
        }
    }

    document.getElementById('picFieldChange').onchange = function (evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

        // FileReader support
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function () {
                document.getElementById("image-cropChange").src = fr.result;
                $image = $('#image-cropChange')[0];


                vanilla2 = new Croppie($image, {
                    viewport: { width: 300, height: 300 },
                    boundary: { width: 450, height: 450 },
                    showZoomer: true,
                    enableResize: true,
                    enableOrientation: true,
                    mouseWheelZoom: 'ctrl'
                });



                $( "#rotateLeft2" ).click(function() {
                    vanilla2.bind({
                        url: fr.result,
                        orientation: 8
                    });
                });

                $( "#rotateRight2" ).click(function() {
                    vanilla2.bind({
                        url: fr.result,
                        orientation: 6
                    });
                });
                $( "#rotateDown2" ).click(function() {
                    vanilla2.bind({
                        url: fr.result,
                        orientation: 3
                    });
                });
                $( "#rotateUp2" ).click(function() {
                    vanilla2.bind({
                        url: fr.result,
                        orientation: 1
                    });
                });
            }
            fr.readAsDataURL(files[0]);
        }

        // Not supported
        else {
            // fallback -- perhaps submit the input to an iframe and temporarily store
            // them on the server until the user's session ends.
        }
    }

    $scope.setProd = function () {

        vanilla.result('base64', 'viewport', 'png',1,false).then(function(img) {
            $scope.produto.img = img;

        });
        $timeout(function(){


        $scope.produto.user = $("#user").val();


        // $scope.produto.img = $scope.produto.img.replace("data:", "")


        var form_data = new FormData();

        for ( var key in $scope.produto ) {
            form_data.append(key, $scope.produto[key]);
        }

        $http({

            method: 'POST',
            url: "setProduto",
            data: form_data,
            headers: {
                'Content-Type': undefined
            }

        }).then(function (response) {

            window.location.href = "admProd";

            }
        );
        }, 400);

    }

    $scope.deleteImage = function () {

        $scope.prod_selected.img_link = '';

    }


    $http({

        method: 'POST',
        url: "getUsers",
        data: $.param({like: $scope.searchUsers, select: "user_suite,user_nome,user_sobrenome"}),
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

            console.log()

        angular.forEach(response.data, function(value, key) {
            $scope.users.push(value.user_suite + " " + value.user_nome + " " + value.user_sobrenome);

        });

            console.log($scope.users)

        }
    );

    $scope.DeleteProd = function (id) {
        $http({

            method: 'POST',
            url: "deleteProd",
            data: $.param({prod_id: id}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}


        }).then(function (response) {

                window.location.href = "admProd";

            }
        );
    };

    $scope.setProdUpdate = function () {

        vanilla2.result('base64', 'viewport', 'png',1,false).then(function(img) {
            $scope.prod_selected.img = img;

        });
        $timeout(function(){


            $scope.prod_selected.user = $("#user").val();


            // $scope.produto.img = $scope.produto.img.replace("data:", "")


            var form_data = new FormData();

            for ( var key in $scope.prod_selected ) {
                form_data.append(key, $scope.prod_selected[key]);
            }

            $http({

                method: 'POST',
                url: "setProdutoUpdate",
                data: form_data,
                headers: {
                    'Content-Type': undefined
                }

            }).then(function (response) {

                    window.location.href = "admProd";

                }
            );
        }, 400);

    }

    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].toString().substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    autocomplete(document.getElementById("user"), $scope.users);


}]);
