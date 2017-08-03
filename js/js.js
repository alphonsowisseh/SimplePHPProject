//register
function RegisterUser() {

            var request = new XMLHttpRequest();

            request.open("POST", "registerToDb.php", true);
            request.onreadystatechange = function () {
                if (request.readyState == 4) { //response from server
                    if (request.status == 200 || request.status == 0) {
                        var str = request.responseText;
                        if (str == "1") {
                            alert("Success!!");
                        }
                        else {

                        }
                    }
                }
            }
            request.send(null);

    }
    //login
    function login() {

                var request = new XMLHttpRequest();

                request.open("POST", "login.php", true);
                request.onreadystatechange = function () {
                    if (request.readyState == 4) { //response from server
                        if (request.status == 200 || request.status == 0) {
                            var str = request.responseText;
                            if (str == "1") {
                                alert("Success!!");
                            }
                            else {
                                //alert("Please try again!");
                            }
                        }
                    }
                }
                request.send(null);

        }
        //addToCart without login
        function addToCart() {

                    alert("Please log in first");

            }
