<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coop-Elect | Cooperative Election System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    @include('partials.navbar')

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">How To Elect Officers</span>
                        <hr class="star-light">
                        <span class="skills">Scroll down and click on the picture of your chosen candidate for each position. A short write-up will appear and a confirmation message will be displayed. Click on "Elect" to choose the candidate or "Go Back" to return to the list of choices.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Chairperson -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Chairperson</h2>
                    <hr class="star-primary">
                </div>
            </div>
            @include('partials.sections.candidates')
        </div>
    </section>

    <!-- Vice Chairperson -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Vice Chairperson</h2>
                    <hr class="star-primary">
                </div>
            </div>
            @include('partials.sections.candidates')
        </div>
    </section>

    <!-- Treasurer -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Treasurer</h2>
                    <hr class="star-primary">
                </div>
            </div>
            @include('partials.sections.candidates')
        </div>
    </section>

    <!-- Secretary -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Secretary</h2>
                    <hr class="star-primary">
                </div>
            </div>
            @include('partials.sections.candidates')
        </div>
    </section>

    <!-- Board of Directors -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Board of Directors</h2>
                    <hr class="star-primary">
                </div>
            </div>
            @include('partials.sections.candidates')
        </div>
    </section>

    <!-- About Section -->
    @include('partials.sections.about')

    <!-- Contact Section -->
    @include('partials.sections.contact')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    @include('partials.modal.candidates')

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
