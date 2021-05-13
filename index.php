<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
    <link rel="stylesheet" href="./my_site/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./my_site/main.css">
    <title>Document</title>
</head>

<body>
    <!-- header starts -->

    <header class="mb-auto position-sticky top-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Eleventh navbar example">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Veks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#first">products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#secound" tabindex="-1" aria-disabled="true">Contact</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown09">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <form>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- main starts -->


    <main class="container-fluid w-100 h-100" id="home">
        <div class="row">
            <div class="col-md-12 justify-content-md-end container-fluid bg-dark">
            <br>
            <br>
            <br>
            <br>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container-fluid">
                        <h1 class="display-1 fw-normal text-light text-md-center">Veks Web Apps</h1>
                        <p class="text-secondary text-md-center">We give you world class web application</p>
                        <p class="text-secondary text-md-center">
                            <a class="btn btn-primary btn-md" href="#first" role="button">See our works</a>
                        </p>
                    </div>
                </div>
            <br>
            <br>
            <br>
            <br>
            </div>
            <div class="b-example-divider"></div>
        </div>
        <!-- Row starts -->

        <div class="row" id="first">
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h3 class="display-3 fw-normal">Our Recent Great Works</h3>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">We are very selective about who we work or partner with. We have worked with small start ups and huge corporations but we only do work that excites us and with people who are as passionate as we are.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                        <a class="btn btn-primary btn-md py-2" href="http://sjtax.in" role="button">See our works</a>
                        <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">View portfolio</button> -->
                        <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
                    </div>
                </div>
                <div class="overflow-hidden" style="max-height: 50vh;">
                    <div class="container px-5">
                        <img src="./my_site/Screenshot 2021-04-26 at 6.52.10 PM.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="b-example-divider"></div>
        </div>
        <div class="row" id="secound">
            <div class="bg-dark text-secondary px-4 py-5 text-center">
                <div class="py-5">
                    <h1 class="display-5 fw-bold text-white">Get in touch</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="fs-5 mb-4">To see our latest project and about our company follow as in our social sides</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">linkedIn</button>
                            <button type="button" class="btn btn-outline-light btn-lg px-4">twitter</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-example-divider"></div>
        </div>
    </main>

    <!-- Footer starts -->

    <footer class="mt-auto text-white-50">

    </footer>
    </div>
    <script src="./my_site/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="./bootstrap/js/jquery-3.6.0.min.js"></script> -->
</body>

</html>