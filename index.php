<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark nav-color">
    <a class="navbar-brand text-color logo" href="#">{BRACES}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item nv-bt">
                <i class="far fa-address-card icon"></i>
                <a class="nav-link icon div_hover" href="about.html" style="color: white">About Us</a>
            </li>
            <li class="nav-item nv-bt">
                <i class="fas fa-phone icon"></i>
                <a class="nav-link icon div_hover" href="contact.php" style="color: white">Contact</a>
            </li>
            <li class="nav-item nv-bt">
                <i class="far fa-question-circle icon"></i>
                <a class="nav-link icon div_hover" href="faq.html" style="color: white">FAQ</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item nv-bt">
                <i class="fas fa-user-plus icon"></i>
                <a class="nav-link icon div_hover" href="Signup.php" style="color: white">Sign Up</a>
            </li>

        </ul>
    </div>
</nav>

    <div class="animated fadeInLeft container-fluid">
        <div class="row">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/login-img.jpg')">
                    <div class="col-6 form-cls">
                        <form class="form-group">
                            <div><h3 style="color: white">Login</h3></div>
                            <div style="padding: 15px">
                                <i class="fas fa-envelope-square text-color" ></i>
                                <input class="form-control-lg" type="email" placeholder="Email" name="email" required pattern = ".+@ucp.edu.pk">
                            </div>
                            <div style="padding: 20px">
                                <i class="fas fa-lock text-color"></i>
                                <input class="form-control-lg" placeholder="Password" name="password" required><br>
                                <br><a href="forgetPassword.php" class="text-color">Forgot password? </a>
                            </div>
                            <div style="padding: 10px">
                                <input type="submit" value="Login" class="btn btn-primary" style="background-color: #0B668A">
                            </div>
                            <div class="text-color">
                                Don't have an account ?
                                <a href="Signup.php" class="text-color"> Sign Up </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer class="modal-footer justify-content-center col-12">
    <div>
        <i class="fas fa-hat-wizard"> Powered by HAT</i>
    </div>
    <div class="blockquote-footer">
        Copyright ©2019
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>