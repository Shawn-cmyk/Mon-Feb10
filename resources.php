<?php
require_once("classes/crud.php");

$courses = new CRUD;
$result = $courses->getAllcourses();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accumulator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon-1.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8756c433ed.js" crossorigin="anonymous"></script>

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Accumulator
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <div class="formback">
        <!--/ Nav Star /-->
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg ">
            <div class="container">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a class="navbar-brand text-brand mb-2" href="index.html"><img src="img/Logo-1.png" alt="Logo" class=""></a>
                <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                    <span class="fa fa-search" aria-hidden="true"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                    <ul class="navbar-nav ml-5 pl-5">
                        <li class="nav-item ml-5 pl-5">
                            <a class="nav-link active" href="Dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="course.php">Courses</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="#">Lessons</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="#">Resorces</a>
                        </li>
                    </ul>
                </div>
                <a type="button" href="login.php" class="btn btn-b-n text-white d-md-block mr-3 bg-danger">
                    <span class="fas fa-sign-out-alt"></span>
                </a>
            </div>
        </nav>
        <!--/ Nav End /-->


        <div class="container">

            <h4 class="FormET text-white w-25 p-3 mt-5 float-left ">New Elements</h4>


            <div class="container col-md-6 mt-5 float-left">
                <div class="card-body bg-white ">
                    <h5 class="title-admin">Add Material</h5>
                    <form action="action.php" method="post">
                        <div class="form-group">
                            <div class="row m-auto">
                                <div class="w-75 m-auto ">
                                    <input type="text" name="Lesson" placeholder="Enter Lesson Name" class="form-control mt-3">
                                    <input type="text" name="course" placeholder="Enter Course Name" class="form-control mt-4">
                                    <input type="file" name="video" class="form-control mt-4">
                                    <input type="file" name="picture" class="form-control mt-4 mb-4">
                                    <button type="submit" name="AddMaterial" class="btn btn-primary w-50 mt-5 btn-block m-auto">Submit</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row float-left">
                <div class="col-md-8">
                    <a href="dashboard.php" class="btn-flat-simple mt-5" style="width:200px;">
                        <i class=" fa fa-caret-right"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>




        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/scrollreveal/scrollreveal.min.js"></script>
        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>

</body>

</html>