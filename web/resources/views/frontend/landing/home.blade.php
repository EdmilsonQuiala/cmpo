<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Styza - App Landing Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/tiny-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.min.css" type="text/css" />

    <!-- colors -->
    <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarCollapse">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end" onclick="toggleBtn()">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>

    <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container-fluid">

            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index-1.html">
                <img src="images/logo-light.png" class="logo-light" alt="" height="30">
                <img src="images/logo-dark.png" class="logo-dark" alt="" height="30">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#app">Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="" class="btn bg-gradiant">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->


    <!-- home section -->
    <section class="home-4 bg-soft-primary" id="home">
        <!-- start container -->
        <div class="container">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <img src="images/home/home-4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 ">
                        <h1 class="display-3 fw-bold">Styza</h1>
                        <h4>Quality business data for better sale.</h4>
                        <p class="text-muted mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla aut
                            cupiditate natus ad eveniet unde repudiandae dolorum sit qui, ratione, fuga reiciendis,
                            pariatur
                            architecto.</p>

                        <div class="d-flex mt-4">
                            <button class="btn bg-gradiant">Get Started</button>
                            <a href="#watchvideomodal" class="btn btn-outline-primary ms-3" data-bs-toggle="modal">
                                <i class="mdi mdi-play f-18 align-middle"></i> Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-6">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-box ">
                        <div class="client-slider" id="client-slider">
                            <div class="item text-center">
                                <img src="images/branch-logo/img-1.png" alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="images/branch-logo/img-2.png" alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="images/branch-logo/img-3.png" alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="images/branch-logo/img-4.png" alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="images/branch-logo/img-5.png" alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="images/branch-logo/img-6.png" alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- end container -->


        <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                <div class="modal-content hero-modal-0 bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <video id="VisaChipCardVideo" class="w-100" controls="">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        <!--Browser does not support <video> tag -->
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- end home section -->



    <!-- service section -->
    <section class="section service bg-light" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">What We Do?</h6>
                        <h2 class="f-40">How can help you!</h2>
                        <div class="border-phone">
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                                inventore omnis aliquid rerum alias molestias.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="service-box text-center">
                        <div class="service-icon p-4"
                            style="background-image: url(./images/service/bomb.png); background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-security text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="">
                                <h5 class="fw-bold">Fully Secured</h5>
                            </a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, adipiscing elit. Phasellus hendrerit.
                                Pellentesque aliquet nibh nec urna.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-4 pt-lg-0">
                    <div class="service-box text-center shadow">
                        <div class="service-icon p-4"
                            style="background-image: url(./images/service/bomb.png); background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-lightbulb-on text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="">
                                <h5 class="fw-bold">Creative Idea</h5>
                            </a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, adipiscing elit. Phasellus hendrerit.
                                Pellentesque aliquet nibh nec urna.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-4 pt-lg-0">
                    <div class="service-box text-center">
                        <div class="service-icon p-4"
                            style="background-image: url(./images/service/bomb.png); background-repeat: no-repeat; background-position: center;">
                            <i class="mdi mdi-google-nearby text-gradiant f-30"></i>
                        </div>

                        <div class="service-content mt-4">
                            <a href="">
                                <h5 class="fw-bold">Deasign & Brading</h5>
                            </a>
                            <p class="text-muted">Lorem ipsum dolor sit amet, adipiscing elit. Phasellus hendrerit.
                                Pellentesque aliquet nibh nec urna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start features -->
    <div class="section features" id="features">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">AppTech Features</h6>
                        <h2 class="f-40">Features for our app </h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            inventore omnis aliquid rerum alias molestias.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item mb-3" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Top Features</button>
                        </li>
                        <li class="nav-item mb-3" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Smart Features</button>
                        </li>

                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4 order-2 order-lg-first">
                                    <div class="features-item text-start text-lg-end">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-message-alert-outline f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Responsive Design</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-autorenew f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Cool Features</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5 mb-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-eyedropper f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Lifetime Support</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="images/features/phone.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-4 order-last">
                                    <div class="features-item">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-lifebuoy f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Stunning Design</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-dropbox f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Best PSD Pack</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-flask f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Creative Idea</h5>
                                            <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="images/features/phone2.png" alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Smart Features</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Fast Messaging</h6>
                                                        <p class="text-muted">Soluta velit sint, esse quis tempora
                                                            impedit corrupti in recusandae tenetur dignissimos
                                                            voluptates..</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">User Freindly</h6>
                                                        <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                            corporis ratione? Laudantium reprehenderit sint provident.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Minimal Interface</h6>
                                                        <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                            recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                            soluta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notification</h6>
                                                        <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                            quos, ad eum laudantium voluptatibus, facilis numquam
                                                            repellendus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end features -->



    <!-- start testimonial -->
    <section class="section bg-light testimonial" id="testimonial">
        <!-- start container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="title">
                        <p class=" text-primary fw-bold mb-0">Client Testimonial <i
                                class="mdi mdi-cellphone-iphone"></i>
                        </p>
                        <h3>What they think of us!</h3>
                        <p class="text-muted">Morbi at erat et tortor tempor sodales non eu lacus Donec at gravida nunc
                            vitae
                            volutpat. Morbi in sem quis
                            dui placerat ornare.</p>
                        <button class="btn bg-gradiant">Read More Testimonial <i
                                class="mdi mdi-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testi-slider" id="testi-slider">
                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-1.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-2.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Easy and prefect solution</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-3.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="images/testi/img-4.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="images/user/img-4.jpg" alt=""
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                    </p>
                                                    <div class="date">
                                                        <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                                <p class="text-muted f-14">Start working with Styza that can provide
                                                    everything you need to generate awareness, drive traffic, connect.
                                                </p>
                                                <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                    Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-image position-absolute end-0 bottom-0">
                                    <img src="images/testi/rating-image.png" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial -->



    <!-- pricing section -->
    <section class="section pricing" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">What's Your Price!</h6>
                        <h2 class="f-40">Pricing plans!</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            inventore omnis aliquid rerum alias molestias.</p>

                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="price-item shadow-sm overflow-hidden">
                        <div class="price-up-box active p-4">
                            <div class="badge bg-primary fw-normal f-14">Basic</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-white mb-0 f-40"><sup class="f-22 fw-normal">$</sup>09<sup
                                        class="f-16 fw-normal"> /month</sup></h2>
                            </div>
                            <p class="text-white-50 mb-1">17 to 19 user</p>
                            <p class="text-white-50 mb-0">For most businesses that want to optimize web query.</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>2
                                    App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>400
                                    Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-close-circle-outline f-20 align-middle me-2 text-danger"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-close-circle-outline f-20 align-middle me-2 text-danger"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-close-circle-outline f-20 align-middle me-2 text-danger"></i>Unlimited
                                    Storage
                                </li>

                            </ul>
                            <a href="" class="btn btn-sm text-primary mt-3"><i class="mdi mdi-check-all me-2"></i>your
                                plane</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                        <div class="topbar-header bg-primary py-2 text-center">
                            <h6 class="mb-0 text-white fw-normal">Recommended For You</h6>
                        </div>
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Startup</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-dark mb-0 f-40"><sup class="f-22 fw-normal">$</sup>19
                                    <sup class="f-16 fw-normal"> /month</sup>
                                </h2>
                            </div>
                            <p class="text-muted mb-1">20 to 40 user</p>
                            <p class="text-muted mb-0">For most businesses that want to optimize web query.</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>15
                                    App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>800
                                    Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-close-circle-outline f-20 align-middle me-2 text-danger"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi  mdi-close-circle-outline f-20 align-middle me-2 text-danger"></i>Unlimited
                                    Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                        <div class="price-up-box p-4">
                            <div class="badge bg-primary fw-normal f-14">Enterprise</div>
                            <div class="price-tag mt-2">
                                <h2 class="text-dark mb-0 f-40"><sup class="f-22 fw-normal">$</sup>29<sup
                                        class="f-16 fw-normal"> /month</sup></h2>
                            </div>
                            <p class="text-muted mb-1">17 to 19 user</p>
                            <p class="text-muted mb-0">For most businesses that want to optimize web query.</p>
                        </div>
                        <div class="border border-3"></div>

                        <div class="price-down-box p-4">
                            <ul class="list-unstyled ">
                                <li><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Unlimited
                                    App and
                                    project</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>1000
                                    Gb/s
                                    storange</li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Free
                                    coustom domain
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Chat
                                    Support
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>No
                                    transaction fees
                                </li>
                                <li class="mt-2"><i
                                        class="mdi mdi-check-circle-outline f-20 align-middle me-2 text-primary"></i>Unlimited
                                    Storage
                                </li>
                            </ul>
                            <a href="" class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-check-all me-2"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->



    <!-- slider section -->
    <section class="section app-slider bg-light" id="app">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">App Screen!</h6>
                        <h2 class="f-40">Show our App Screenshots!</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br>
                            inventore omnis aliquid rerum alias molestias.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container">
                        <div class="fream-phone ">
                            <img src="images/testi/phone-fream.png" alt="" class="img-fluid">
                        </div>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide border-radius">
                                <img src="images/testi/ss/s-1.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="images/testi/ss/s-2.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="images/testi/ss/s-3.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="images/testi/ss/s-4.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="images/testi/ss/s-5.png" alt="" class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="images/testi/ss/s-6.png" alt="" class="img-fluid">
                            </div>
                        </div>

                        <!-- navigation buttons -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- end section -->



    <!-- team section -->
    <section class="section team" id="team">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Oue Team!</h6>
                        <h2 class="f-40">We are team!</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br>
                            inventore omnis aliquid rerum alias molestias.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-box text-end">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image">
                                    <img src="images/team/img1.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon ">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Cody Fisher <span class="f-14 text-muted fw-normal">/ owner</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="images/team/img4.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Emily Coper <span class="f-14 text-muted fw-normal">/ Desiger</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="images/team/img3.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Nick Obron <span class="f-14 text-muted fw-normal">/ Devloper</span></h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 col-10">
                                <div class="team-image text-end">
                                    <img src="images/team/img2.png" alt="" class="img-fluid">
                                </div>
                                <div class="team-icon">
                                    <div class="d-flex mt-2">
                                        <div class="social-icon facebook mx-2">
                                            <a href=""> <i class="mdi mdi-facebook f-20"></i></a>
                                        </div>
                                        <div class="social-icon instagram mx-2">
                                            <a href=""><i class="mdi mdi-instagram f-20"></i></a>
                                        </div>
                                        <div class="social-icon twitter mx-2">
                                            <a href=""><i class="mdi mdi-twitter f-20"></i></a>
                                        </div>
                                        <div class="social-icon linkedin mx-2">
                                            <a href=""><i class="mdi mdi-linkedin f-20"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-info position-absolute">
                            <h6>Simmy roy <span class="f-14 text-muted fw-normal">/ Manager</span></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->



    <!-- cta section -->
    <section class="section cta">
        <div class="bg-overlay-gradiant"></div>
        <!-- start container -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="display-4 text-white">Build Your ideal workspace today.</h1>
                        <p class="text-white-50 mt-3 f-18">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Iure distinctio vero facilis numquam sapiente! Eaque inventore eveniet repellendus quod
                            maiores nulla.</p>
                        <div class="d-flex mt-4 ">
                            <div class="app-store">
                                <a href=""><img src="images/img-appstore.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="googleplay">
                                <a href=""><img src="images/img-googleplay.png " alt="" class="img-fluid ms-3"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-phone-image">
                        <img src="images/cta-bg.png" alt="" class=" img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->


    <!-- contact section -->
    <section class="section contact overflow-hidden" id="contact">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Contact Us</h6>
                        <h2 class="f-40">Get In Touch!</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br>
                            inventore omnis aliquid rerum alias molestias.</p>

                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-box">
                        <div class="mb-4">
                            <h4 class=" fw-semibold mb-1">Need Support !</h4>
                            <p class="text-muted">Contact us for a quote , help to join the them.</p>
                        </div>

                        <div class="custom-form mt-4 ">
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg" style="opacity: 1;">
                                    <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                </p>

                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control contact-form"
                                                placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email"
                                                class="form-control contact-form" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control contact-form" id="subject"
                                                placeholder="Your Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4"
                                                class="form-control contact-form h-auto"
                                                placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-12 d-grid">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-lg-7">
                    <div class="m-5">
                        <div class="position-relative">
                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29754.94142818836!2d72.88699279999999!3d21.217263799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1641286801478!5m2!1sen!2sin"
                                    width="550" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                            <div class="map-shape"></div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-google-maps f-50 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Location</h5>
                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-email f-50 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Email</h5>
                            <p class="f-14 mb-0 text-muted">Email: FredVWeaver@rhyta.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-phone f-50 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Phone</h5>
                            <p class="f-14 mb-0 text-muted">2276 Lynn Ogden Lane Beaumont</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->



    <!-- footer section -->
    <section class=" section footer bg-dark overflow-hidden">
        <div class="bg-arrow">

        </div>
        <!-- container -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <a class="navbar-brand logo text-uppercase" href="index-1.html">
                        <img src="images/logo-footer.png" class="logo-light" alt="" height="30">
                    </a>
                    <p class="text-white-50 mt-2 mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                        deserunt expedita! Id sit dicta quidem aperiam aut ad debitis numquam .</p>

                    <div class="footer-icon mt-4">
                        <div class=" d-flex align-items-center">
                            <a href="" class="me-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Facebook">
                                <i class="mdi mdi-facebook f-24 align-middle text-primary"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Twitter">
                                <i class="mdi mdi-twitter f-24 align-middle text-primary"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Googleplay">
                                <i class="mdi mdi-google-play f-24 align-middle text-primary"></i>
                            </a>
                            <a href="" class="mx-2 avatar-sm text-center" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Linkedin">
                                <i class="mdi mdi-linkedin f-24 align-middle text-primary"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="text-start mt-4 mt-lg-0">
                        <h5 class="text-white fw-bold">Product</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">Features</a></li>
                            <li><a href="">Pricing</a></li>
                            <li><a href="">Get App</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 ">
                    <div class="text-start">
                        <h5 class="text-white fw-bold">Policies</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">Security & Provciy</a></li>
                            <li><a href="">Marketplace</a></li>
                            <li><a href="">Term & Condition</a></li>
                            <li><a href="">Collection</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5 class="text-white">Subscribe</h5>
                    <div class="input-group my-4">
                        <input type="text" class="form-control p-3" placeholder="subscribe" aria-label="subscribe"
                            aria-describedby="basic-addon2">
                        <a href="" class="input-group-text bg-primary text-white px-4" id="basic-addon2">Go</a>
                    </div>
                    <p class="mb-0 text-white-50">publishes will show up in your Subscriptions feed. You may also start.
                    </p>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

    <section class="bottom-footer py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p class="mb-0 text-center text-muted">©
                        <script>document.write(new Date().getFullYear())</script> Styza. Design with <i
                            class="mdi mdi-heart text-danger"></i> by <a href="https://store.themesdesign.in"
                            target="_blank" class="text-muted">Themesdesign.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->


    <!-- Style switcher -->
    <div class="style-switcher" id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="uil uil-setting text-white"
                    style="display: inline; line-height: 46px;"></i></a>
        </div>
    </div>
    <!-- end switcher-->



    <!--Bootstrap Js-->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Slider Js -->
    <script src="js/tiny-slider.js"></script>
    <script src="js/swiper.min.js"></script>

    <!-- <script src="js/smooth-scroll.polyfills.min.js"></script> -->

    <!-- counter -->
    <!-- <script src="js/counter.init.js"></script> -->

    <!-- App Js -->
    <script src="js/app.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        })
    </script>

    <script>
        var slider = tns({
            container: '.client-slider',
            loop: true,
            autoplay: true,
            mouseDrag: true,
            controls: false,
            navPosition: "bottom",
            nav: false,
            autoplayTimeout: 5000,
            speed: 900,
            center: false,
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            controlsText: ['&#8592;', '&#8594;'],
            autoplayButtonOutput: false,
            gutter: 30,
            responsive: {

                992: {
                    gutter: 30,
                    items: 4
                },

            }
        });

    </script>


</body>

</html>
