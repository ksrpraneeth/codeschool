<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="user_login">
        <div class="container-fluid my-5 d-flex justify-content-center" style="background-color: #d2f3fb;">
            <div class="row">
                <div class="header">
                    <div class="d-flex justify-content-center my-3 col-12 sm-12">
                        <h3>pixelvide</h3>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center col-12 sm-12">
                        <h4>User Registration</h4>
                    </div>
                </div>
                <div class="card bg-secondary bg-opacity-25">
                    <div class="row d-flex justify-content-center col-10 sm-10 my-3">
                        <div class="col-4">
                            <label for="username">Username:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center col-10 sm-10 my-3">
                        <div class="col-4">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="Password">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center col-10 sm-10 my-3">
                        <div class="col-4">
                            <label for="confirmpassword">Confirm Password:</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control" id="confirmpassword" placeholder="Enter Password" name="confirmPassword">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center col-10 sm-10 my-3">
                        <div class="col-4">
                            <label for="Email">Email:</label>
                        </div>
                        <div class="col-6">
                            <input type="mail" class="form-control" id="email" placeholder="Enter Mail" name="Email">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center col-10 sm-10 my-3">
                        <div class="col-4">
                            <label for="mobile number">Mobile Number:</label>
                        </div>
                        <div class="col-6">
                            <input type="mail" class="form-control" id="phonenumber" placeholder="Enter Mobile Number" name="Mobile No">
                        </div>
                    </div>
                    <div class="col-10 sm-10 d-flex justify-content-center">
                        <p class="text-danger" id="errors"></p>
                    </div>
                </div>
                <div class="d-flex justify-content-center col-10 sm-10 m-3">
                    <button type="button" class="btn btn-primary" style="background-color:#9e9c95; border-color:#9e9c95" id="register">Register</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $("#register").click(function() {
        var formData = {
            username: $("#username").val(),
            password: $("#password").val(),
            confirmpassword: $("#confirmpassword").val(),
            email: $("#email").val(),
            phonenumber: $("#phonenumber").val(),
        };
        $.ajax({
            type: "POST",
            data: formData,
            dataType: "JSON",
            url: "registration.php",
            success: function (responseData) {
                // responseData = JSON.parse(responseData);
                if (!responseData.status) {
                    $('#errors').text(responseData.message);
                } else {
                    alert(responseData.message);
                    window.location.assign('login.php');
                }
            },
            error: function () {

            }
        })
    });
</script>

</html>