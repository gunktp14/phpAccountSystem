<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Link CSS-->
    <link rel="stylesheet" href="./public/css/signUp.css">
    <title>meituhed</title>
</head>
<body>

    <div class="container">
        <section>
            <div class="mainFormSignup">
                    <div class="signUpform">
                            <h2>Sign up</h2>
                        <p class="small">Please input you information for register.</p>
                        <hr>
                        <form action="?route=sign_up" method="POST" >
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                <input style="font-size:small;" type="text" class="form-control" name="firstName" placeholder="firstname">
                                </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                <input style="font-size:small;" type="text" class="form-control" name="lastName" placeholder="lastname">
                                </div>
                                </div>
                            </div>
                                <div class="form-outline mb-3">
                                    <input style="font-size:small;" type="text" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="form-outline mb-3">
                                    <input style="font-size:small;" type="password" class="form-control" name="upassword" placeholder="password">
                                </div>
                                <div class="form-outline mb-3">
                                    <input style="font-size:small;" type="password" class="form-control" name="repeat_password" placeholder="repeat password">
                                </div>
                                <div class="form-outline mb-3">
                                    <input style="font-size:small;" type="text" class="form-control" name="email" placeholder="email">
                                </div>
                                <div class="form-outline mb-1 conditionNote">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <p class="small">I accept the <a href="">Terms and conditions</a></p>
                                </div>
                            <div class="d-grid">
                                <input type="submit" name="submit_Signup" class="btn btn-primary btn">
                            </div>
                        </form>
                        <div class="d-flex justify-content-sm-end">
                            <p class="text-xsmall">if you have account already can <a href="?route=loginPage">Sign in</a></p>
                        </div>
                    </div>
                    <div class="picSignUp">
                        <img src="./public/images/signin-image.jpg" width="100%"alt="">
                    </div>
            </div>
        </section>
    </div>

</body>
</html>