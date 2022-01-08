<?php

require_once "libs/Routes.php";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts   -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" type="text/css">

    <title>Strona</title>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" action="views/login_view.php">
                <button class="btn btn-outline-success make-space">Login</button>
            </form>
            <form class="d-flex" action="register" method="post">
                <button class="btn btn-outline-success">Register</button>
            </form>
        </div>
    </div>
</nav>

<?php $router = new Routes(); ?>


<!--<section class="h-100 h-custom" style="background-color: #8fc4b7;">-->
<!--    <div class="container py-5 h-100">-->
<!--        <div class="row d-flex justify-content-center align-items-center h-100">-->
<!--            <div class="col-lg-8 col-xl-6">-->
<!--                <div class="card rounded-3">-->
<!--                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">-->
<!--                    <div class="card-body p-4 p-md-5">-->
<!--                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>-->
<!---->
<!--                        <form class="px-md-2">-->
<!---->
<!--                            <div class="form-outline mb-4">-->
<!--                                <input type="text" id="form3Example1q" class="form-control" />-->
<!--                                <label class="form-label" for="form3Example1q">Name</label>-->
<!--                            </div>-->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-md-6 mb-4">-->
<!---->
<!--                                    <div class="form-outline datepicker">-->
<!--                                        <input-->
<!--                                                type="text"-->
<!--                                                class="form-control"-->
<!--                                                id="exampleDatepicker1"-->
<!--                                        />-->
<!--                                        <label for="exampleDatepicker1" class="form-label">Select a date</label>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!--                                <div class="col-md-6 mb-4">-->
<!---->
<!--                                    <select class="select">-->
<!--                                        <option value="1" disabled>Gender</option>-->
<!--                                        <option value="2">Female</option>-->
<!--                                        <option value="3">Male</option>-->
<!--                                        <option value="4">Other</option>-->
<!--                                    </select>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="mb-4">-->
<!---->
<!--                                <select class="select">-->
<!--                                    <option value="1" disabled>Class</option>-->
<!--                                    <option value="2">Class 1</option>-->
<!--                                    <option value="3">Class 2</option>-->
<!--                                    <option value="4">Class 3</option>-->
<!--                                </select>-->
<!---->
<!--                            </div>-->
<!---->
<!--                            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">-->
<!--                                <div class="col-md-6">-->
<!---->
<!--                                    <div class="form-outline">-->
<!--                                        <input type="text" id="form3Example1w" class="form-control" />-->
<!--                                        <label class="form-label" for="form3Example1w">Registration code</label>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>-->
<!---->
<!--                        </form>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>