<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <title>Afercon Pay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="{{ asset('frontend/images/afercon/logo/icon.png') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend/landing/css/bootstrap.min.css') }}" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="{{ asset('frontend/landing/css/materialdesignicons.min.css') }}" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('frontend/landing/css/tiny-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/landing/css/swiper.min.css') }}" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('frontend/landing/css/style.min.css') }}" type="text/css" />

    <!-- colors -->
    <link href="{{ asset('frontend/landing/css/colors/default.css') }}" rel="stylesheet" type="text/css" id="color-opt" />
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
                <img src="{{ asset('frontend/images/afercon/logo/font-logo-1.png') }}" class="logo-light" alt="" height="30">
                <img src="{{ asset('frontend/images/afercon/logo/font-logo.png') }}" class="logo-dark" alt="" height="30">
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
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#funcionalidades">Funcionalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#capturas">Capturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#app">App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactos">Contactos</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="" class="btn bg-gradiant">Baixar App</a>
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
                        <img src="{{ asset('frontend/images/afercon/capturas/13.png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-lg-6 ">
                        <h1 class="display-3 fw-bold">Afercon Pay</h1>
                        <h4>Simplifique seus Pagamentos e Transforme sua Experiência Financeira.</h4>
                        <p class="text-muted mt-4">Experimente a Revolução Financeira! Baixe o Afercon Pay agora e descubra a facilidade de gerenciar e realizar pagamentos com segurança e agilidade.</p>

                        <div class="d-flex mt-4">
                            <button class="btn bg-gradiant">Baixar Agora</button>
                            <a href="#watchvideomodal" class="btn btn-outline-primary ms-3" data-bs-toggle="modal">
                                <i class="mdi mdi-play f-18 align-middle"></i> Saiba Mais</a>
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
                                <img src="{{ asset('frontend/images/afercon/parceiros/1.png') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="{{ asset('frontend/images/afercon/parceiros/2.png') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="{{ asset('frontend/images/afercon/parceiros/3.png') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="{{ asset('frontend/images/afercon/parceiros/4.png') }}"
                                    alt="" class="img-fluid">
                            </div>
                            <!-- slider item -->

                            <div class="item text-center">
                                <img src="{{ asset('frontend/images/afercon/parceiros/5.png') }}"
                                    alt="" class="img-fluid">
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
    <section class="section service bg-light" id="sobre">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Sobre Nós</h6>
                        <h2 class="f-40">Quem somos!</h2>
                        <div class="border-phone">
                            <p class="text-muted">Afercon Pay é uma iniciativa inovadora criada para simplificar a vida financeira de nossos usuários. Com tecnologia moderna e um compromisso com a excelência, nos dedicamos a oferecer um serviço confiável e acessível, conectando pessoas e negócios em uma plataforma integrada e eficiente</p>
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
                                <h5 class="fw-bold">Segurança Avançada</h5>
                            </a>
                            <p class="text-muted">Proteção total dos seus dados financeiros com criptografia de última geração.</p>
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
                                <h5 class="fw-bold">Facilidade de Uso</h5>
                            </a>
                            <p class="text-muted">Interface intuitiva para todas as idades.</p>
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
                                <h5 class="fw-bold">Economia de Tempo</h5>
                            </a>
                            <p class="text-muted">Processos rápidos e automatizados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start features -->
    <div class="section features" id="funcionalidades">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">>Funcionalidades Poderosas</h6>
                        <h2 class="f-40">Que Transformam Suas Finanças</h2>
                        <p class="text-muted">O Afercon Pay oferece um conjunto completo de funcionalidades para simplificar sua vida financeira. Desde pagamentos rápidos até o gerenciamento inteligente de despesas, projetamos tudo para oferecer a você segurança, praticidade e controle absoluto.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item mb-3" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab"
                                aria-controls="pills-home" aria-selected="true">Funcionalidades Especiais</button>
                        </li>
                        <li class="nav-item mb-3" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Funcionalidades Gerais</button>
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
                                            <h5>Transferências Instantânea</h5>
                                            <p>Envie e receba dinheiro em segundos, a qualquer momento, com total segurança.</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-autorenew f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Pagamentos Online:</h5>
                                            <p>Pague contas, serviços e compras diretamente pelo aplicativo, sem complicações..</p>
                                        </div>
                                    </div>

                                    <div class="features-item text-start text-lg-end mt-5 mb-5">
                                        <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                            <i class="mdi mdi-eyedropper f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Recarga de Saldo:</h5>
                                            <p>Adicione fundos à sua carteira com várias opções de pagamento, como cartões e transferências bancárias.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{ asset('frontend/images/afercon/capturas/10.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-4 order-last">
                                    <div class="features-item">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-lifebuoy f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Conversão de Moeda:</h5>
                                            <p>Converta moedas facilmente dentro do aplicativo com taxas transparentes e atualizadas em tempo real.</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-dropbox f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Gestão Financeira:</h5>
                                            <p>Acompanhe seus gastos, categorize despesas e receba relatórios financeiros detalhados.</p>
                                        </div>
                                    </div>

                                    <div class="features-item mt-5">
                                        <div class="icon avatar-sm text-center rounded-circle">
                                            <i class="mdi mdi-flask f-24"></i>
                                        </div>
                                        <div class="content mt-3">
                                            <h5>Histórico de Transações:</h5>
                                            <p>Visualize todas as suas transações em um painel organizado, com filtros e opções de busca.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img src="{{ asset('frontend/images/afercon/capturas/11.png') }}"
                                        alt="" class="img-fluid">
                                </div>

                                <div class="col-lg-6">
                                    <h2 class="mb-4">Funcionalidades Gerais</h2>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Cashback e Promoções:</h6>
                                                        <p class="text-muted">Ganhe recompensas e aproveite ofertas exclusivas ao usar o Afercon Pay para seus pagamentos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Notificações em Tempo Real:</h6>
                                                        <p class="text-muted">Receba alertas instantâneos sobre transações, promoções e atualizações importantes.
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
                                                        <h6 class="mt-1">Segurança Avançada:</h6>
                                                        <p class="text-muted">Tecnologia de criptografia de ponta e autenticação em dois fatores para proteger suas informações.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="features-box mt-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                    </div>
                                                    <div class="heading">
                                                        <h6 class="mt-1">Integração com Bancos</h6>
                                                        <p class="text-muted">Conecte sua conta bancária para mais facilidade e praticidade.</p>
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
    <section class="section bg-light testimonial" id="testimonial" style="display: none">
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
                                        <img src="{{ asset('frontend/landing/images/testi/img-1.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{ asset('frontend/landing/images/user/img-1..jpg') }}"
                                                            alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
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
                                    <img src="{{ asset('frontend/landing/images/testi/rating-image.png') }}"
                                        alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{ asset('frontend/landing/images/testi/img-2.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{ asset('frontend/landing/images/user/img-2..jpg') }}"
                                                            alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
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
                                    <img src="{{ asset('frontend/landing/images/testi/rating-image.png') }}"
                                        alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{ asset('frontend/landing/images/testi/img-3.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{ asset('frontend/landing/images/user/img-3..jpg') }}"
                                                            alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
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
                                    <img src="{{ asset('frontend/landing/images/testi/rating-image.png') }}"
                                        alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item ">
                            <div class="testi-box position-relative overflow-hidden">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <img src="{{ asset('frontend/landing/images/testi/img-4.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar">
                                                        <img src="{{ asset('frontend/landing/images/user/img-4..jpg') }}"
                                                            alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki
                                                        Fabel
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
                                    <img src="{{ asset('frontend/landing/images/testi/rating-image.png') }}"
                                        alt="" class="img-fluid">
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

    <section class="section app-slider bg-light" id="capturas">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h6 class="mb-0 fw-bold text-primary">Capturas!</h6>
                        <h2 class="f-40">Soluções para Você!</h2>
                        <p class="text-muted">Ferramentas avançadas para recebimento de pagamentos e gestão financeira empresarial..</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container">
                        <div class="fream-phone ">
                            <img src="{{ asset('frontend/landing/images/testi/phone-fream.png') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide border-radius">
                                <img src="{{ asset('frontend/images/afercon/capturas/2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{ asset('frontend/images/afercon/capturas/3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{ asset('frontend/images/afercon/capturas/4.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{ asset('frontend/images/afercon/capturas/5.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{ asset('frontend/images/afercon/capturas/6.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide border-radius">
                                <img src="{{ asset('frontend/images/afercon/capturas/7.png') }}" alt=""
                                    class="img-fluid">
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

    <!-- cta section -->
    <section class="section cta" id="app">
        <div class="bg-overlay-gradiant"></div>
        <!-- start container -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="display-4 text-white">Descubra como o Afercon Pay pode facilitar sua vida!</h1>
                        <p class="text-white-50 mt-3 f-18">Baixe agora e aproveite todas as funcionalidades que criamos pensando em você.</p>
                        <div class="d-flex mt-4 ">
                            <div class="app-store">
                                <a href=""><img src="{{ asset('frontend/landing/images/img-appstore.png') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="googleplay">
                                <a href=""><img
                                        src="{{ asset('frontend/landing/images/img-googleplay.png') }}"
                                        alt="" class="img-fluid ms-3"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-phone-image">
                        <img src="{{ asset('frontend/images/afercon/capturas/12.png') }}" alt=""
                            class=" img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->

    <!-- footer section -->
    <section class=" section footer bg-dark overflow-hidden" id="contactos">
        <div class="bg-arrow">

        </div>
        <!-- container -->
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <a class="navbar-brand logo text-uppercase" href="index-1.html">
                        <img src="{{ asset('frontend/landing/images/logo-footer.png') }}" class="logo-light"
                            alt="" height="30">
                    </a>
                    <p class="text-white-50 mt-2 mb-0">Afercon Pay é uma iniciativa inovadora criada para simplificar a vida financeira de nossos usuários. Com tecnologia moderna e um compromisso com a excelência, nos dedicamos a oferecer um serviço confiável e acessível.</p>

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
                        <h5 class="text-white fw-bold">Contactos</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">ola@aferconpay.com</a></li>
                            <li><a href="">+244 923 000 000</a></li>
                            <li><a href="">Luanda, Angola</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 ">
                    <div class="text-start">
                        <h5 class="text-white fw-bold">Links úteis</h5>
                        <ul class="footer-item list-unstyled footer-link mt-3">
                            <li><a href="">Termos de Uso</a></li>
                            <li><a href="">Política de Privacidade</a></li>
                            <li><a href="">Suporte</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5 class="text-white">Inscreva-se</h5>
                    <div class="input-group my-4">
                        <input type="text" class="form-control p-3" placeholder="Seu email"
                            aria-label="subscribe" aria-describedby="basic-addon2">
                        <a href="" class="input-group-text bg-primary text-white px-4"
                            id="basic-addon2">Assinar</a>
                    </div>
                    <p class="mb-0 text-white-50">Digite acima o seu e-mail</p>
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
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Afercon Pay. Todos os direitos reservados</a>
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
    <script src="{{ asset('frontend/landing/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slider Js -->
    <script src="{{ asset('frontend/landing/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/landing/js/swiper.min.js') }}"></script>

    <!-- <script src="{{ asset('frontend/landing/js/smooth-scroll.polyfills.min.js') }}"></script> -->

    <!-- counter -->
    <!-- <script src="{{ asset('frontend/landing/js/counter.init.js') }}"></script> -->

    <!-- App Js -->
    <script src="{{ asset('frontend/landing/js/app.js') }}"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
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
