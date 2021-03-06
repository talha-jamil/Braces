<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark nav-color">
    <a class="navbar-brand text-color logo" href="#">{BRACES}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item nv-bt">
                <i class="fas fa-home icon"></i>
                <a class="nav-link icon div_hover" href="" style="color: white">Home</a>
            </li>
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
                <i class="fas fa-sign-in-alt icon"></i>
                <a class="nav-link icon div_hover" href="index.php" style="color: white">Login</a>
            </li>

            <li class="nav-item nv-bt">
                <i class="fas fa-user-plus icon"></i>
                <a class="nav-link icon div_hover" href="Signup.php" style="color: white">Sign Up</a>
            </li>

        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('images/forget-img.png')">
                     <p class="modal-header justify-content-center">Have a question about a feature? Send our support team a message here, and we'll get back to you as quickly as humanly possible!</p>
                    <form>
                        <div class="form-group align-items-center">
                            <div class="col-6" style="display: inline-block">
                                <div>
                                    <br>Email:
                                    <input class="form-control" type="email" required pattern=".+@ucp.edu.pk">
                                </div>
                                <div>
                                    <br>Subject:
                                    <input class="form-control" >
                                </div>
                                <div>
                                    <br>How can we help you?<br>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div>
                                    <br><input type="submit" class="btn btn-primary mb-2">
                                </div>
                            </div>
                            <div style="display: inline-block" class="col-6 mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20central%20punjab&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:950px;}</style></div>

                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="modal-footer justify-content-center">

    <div>
        <i class="fas fa-hat-wizard">Powered by HAT</i>
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