<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convocation Details</title>

    <!-- Add this to your head tag -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add this before the closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/bootstrap.min.css" />

    <!--====== Lineicons CSS ======-->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <!-- Include Font Awesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <!--====== Style css ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/starter.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <style>
        .custom-control-prev, .custom-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            z-index: 10;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .custom-control-prev:hover, .custom-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7);
            transform: translateY(-50%) scale(1.1);
        }

        .custom-control-prev {
            left: 20px;
        }

        .custom-control-next {
            right: 20px;
        }

        .custom-control-prev i, .custom-control-next i {
            font-size: 24px;
        }
        .carousel-image {
            height: 500px; /* Set a consistent height for all images */
            object-fit: cover; /* Ensures the image covers the whole area */
            border-radius: 15px; /* Adds rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow */
        }

        .carousel-inner {
            border-radius: 15px; /* Ensures the inner area follows the same rounded corners */
            overflow: hidden; /* Prevents image overflow */
        }

        .custom-prev, .custom-next {
            width: 60px; /* Make the arrows larger */
            height: 60px;
            background: linear-gradient(45deg, #ff007f, #ff8c00); /* Add a gradient background */
            border-radius: 50%; /* Make the arrows circular */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-prev:hover, .custom-next:hover {
            background: linear-gradient(45deg, #ff8c00, #ff007f); /* Reverse the gradient on hover */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Add a shadow on hover */
        }

        .custom-prev .carousel-control-prev-icon,
        .custom-next .carousel-control-next-icon {
            width: 20px; /* Adjust the arrow icon size */
            height: 20px;
            background-color: white; /* Make the arrow icon white */
            border-radius: 50%;
        }

        .custom-prev {
            left: -30px; /* Position the previous arrow outside the carousel */
        }

        .custom-next {
            right: -30px; /* Position the next arrow outside the carousel */
        }
        </style>
    <div>
        <!--====== SLIDER ONE PART START ======-->
    <section class="slider-area slider-one">
        <div class="bd-example">
            <div id="carouselOne" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselOne" data-slide-to="1"></li>
                    <li data-target="#carouselOne" data-slide-to="2"></li>
                    <li data-target="#carouselOne" data-slide-to="3"></li>
                    <li data-target="#carouselOne" data-slide-to="4"></li>
                    <li data-target="#carouselOne" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item bg_cover active"
                        style="background-image: url('./img/AVU1445.JPG');">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">
                                            25th General Convocation

                                        </h2>
                                        <h4 style="color:white">Sabaragamuwa University of Sri lanka</h4>
                                        <p class="text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg_cover"
                        style="background-image: url('./img/AVU1499.JPG');">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                         <h2 class="carousel-title">
                                            25th General Convocation

                                        </h2>
                                        <h4 style="color:white">Sabaragamuwa University of Sri lanka</h4>

                                        <p class="text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg_cover" style="background-image: url('./img/AVU0989.JPG');">
    <div class="carousel-caption">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <h2 class="carousel-title">
                        25th General Convocation

                    </h2>
                    <h4 style="color:white">Sabaragamuwa University of Sri lanka</h4>

                    <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
                    <div class="carousel-item bg_cover" style="background-image: url('./img/AVU0981.JPG');">
    <div class="carousel-caption">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <h2 class="carousel-title">
                        25th General Convocation

                    </h2>
                    <h4 style="color:white">Sabaragamuwa University of Sri lanka</h4>

                    <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
                    <div class="carousel-item bg_cover" style="background-image: url('./img/AVU1523.JPG');">
    <div class="carousel-caption">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <h2 class="carousel-title">
                        25th General Convocation

                    </h2>
                    <h4 style="color:white">Sabaragamuwa University of Sri lanka</h4>

                    <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
                    <div class="carousel-item bg_cover" style="background-image: url('./img/AVU1499.JPG');">
    <div class="carousel-caption">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <h2 class="carousel-title">
                        25th General Convocation

                    </h2>
                    <h4 style="color:white">Sabaragamuwa University of Sri lanka</h4>

                    <p class="text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                    <i class="lni lni-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                    <i class="lni lni-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!--====== SLIDER ONE PART ENDS ======-->

    <!--====== FEATURE ONE PART START ======-->
    <section class="features-area features-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3 class="title">25th General Convocation </h3>
                        <p class="text">
                            Register for your convocation ceremony for the respective faculties below.
                        </p>
                    </div>
                    <!-- row -->
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <div id="facultyCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-compass"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Applied Sciences</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-construction"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Geomatics</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-cup"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Computing</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-compass"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Management Studies</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-construction"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Social Sciences & Languages</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-cup"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Agricultural Sciences</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-compass"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Technology</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-construction"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Medicines</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-7 col-sm-9">
                                    <div class="features-style-one text-center">
                                        <div class="features-icon">
                                            <i class="lni lni-cup"></i>
                                        </div>
                                        <div class="features-content">
                                            <h4 class="features-title">Faculty of Computing</h4>
                                            <p class="text">Explore diverse programs and research opportunities!</p>
                                            <div class="features-btn rounded-buttons">
                                                <a class="btn primary-btn-outline rounded-full" href="javascript:void(0)">View more!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </div>
                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev custom-control-prev" href="#facultyCarousel" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next custom-control-next" href="#facultyCarousel" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>
            <!-- row -->


        </div>
        <!-- container -->
    </section>
    <!--====== FEATURE ONE PART ENDS ======-->

<div class="container p-5">
    <div class="row">
    <div class="col-lg-4">
        <h3>Calling Applications for the Gold Medal</h3>
        <!-- Start Accordion Section -->
        <div class="single-accordion">
            <div class="accordion-style-two">
                <div class="accordion" id="accordionTwo">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <a href="#collapseSix" data-toggle="collapse" role="button" aria-expanded="true">
                                 Year Gold Medal - Faculty of Geomatics
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse show" data-parent="#accordionTwo">
                            <div class="card-body">
                                <p class="text">
                                    Raw denim you probably haven’t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <a class="collapsed" href="#collapseSeven" data-toggle="collapse" role="button" aria-expanded="false">
                                Year Gold Medal - Faculty of Applied Sciences
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordionTwo">
                            <div class="card-body">
                                <p class="text">
                                    Raw denim you probably haven’t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <a class="collapsed" href="#collapseEight" data-toggle="collapse" role="button" aria-expanded="false">
                                 Year Gold Medal - Faculty of Computing
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordionTwo">
                            <div class="card-body">
                                <p class="text">
                                    Raw denim you probably haven’t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion Section -->
    </div>

    <div class="col-lg-8">
        <!-- Start Image Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 carousel-image" src="./img/_AVU1478.JPG" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-image" src="./img/_AVU1442.JPG" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel-image" src="./img/AVU1445.JPG" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End Image Slider -->
    </div>
</div>
</div>

</div>

<!--====== ABOUT TWO PART ENDS ======-->

<div class="tabs container p-5">

    <div class="single-tabs tabs-one">
        <ul class="nav nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab-one-one-tab" data-toggle="tab" href="#tab-one-one" role="tab"
                    aria-controls="tab-one-one" aria-selected="true">TAB 01</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-one-two-tab" data-toggle="tab" href="#tab-one-two" role="tab"
                    aria-controls="tab-one-two" aria-selected="false">TAB 02</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-one-three-tab" data-toggle="tab" href="#tab-one-three" role="tab"
                    aria-controls="tab-one-three" aria-selected="false">TAB 03</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-one-four-tab" data-toggle="tab" href="#tab-one-four" role="tab"
                    aria-controls="tab-one-four" aria-selected="false">TAB 04</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one-one" role="tabpanel" aria-labelledby="tab-one-one-tab">
                <div class="tab-text">
                    <iframe src="https://www.sab.ac.lk/sites/default/files/convocation/Issuing%20of%20Cloaks%2C%20Registration%20for%20Photographs%20and%20Submission%20of%20Payment%20Receipt%20-%20Phase%20II.pdf" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-one-two" role="tabpanel" aria-labelledby="tab-one-two-tab">
                <div class="tab-text">
                    <iframe src="https://www.sab.ac.lk/sites/default/files/convocation/Issuing%20of%20Cloaks%2C%20Registration%20for%20Photographs%20and%20Submission%20of%20Payment%20Receipt%20-%20Phase%20II.pdf" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-one-three" role="tabpanel" aria-labelledby="tab-one-three-tab">
                <div class="tab-text">
                    <iframe src="https://www.sab.ac.lk/sites/default/files/convocation/Issuing%20of%20Cloaks%2C%20Registration%20for%20Photographs%20and%20Submission%20of%20Payment%20Receipt%20-%20Phase%20II.pdf" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-one-four" role="tabpanel" aria-labelledby="tab-one-four-tab">
                <div class="tab-text">
                    <iframe src="https://www.sab.ac.lk/sites/default/files/convocation/Issuing%20of%20Cloaks%2C%20Registration%20for%20Photographs%20and%20Submission%20of%20Payment%20Receipt%20-%20Phase%20II.pdf" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- tabs one -->
</div>

<!-- accordion style two -->


    <!-- Bootstrap and necessary JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
