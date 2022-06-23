<?php
session_start();
$panier = 0 ;
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="GetTemplate.com">
    <title>Hostips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />


    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="page-home">

    <nav class="navbar navbar-dual navbar-inverse navbar-fixed-top headroom ontop-now navbar-expand ">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.webp" alt="logo" height="56" width="72">
                    <img src="assets/images/logo.webp" alt="Progressus HTML5 template" class="secondary" height="56"
                        width="72">
                </a>

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right" >
                    <li class="active"><a href="index.php" >Home</a></li>
                    <li ><a  href="tendency.php">Tendency</a></li>
                    <li ><a  href="new.php">New</a></li>
                    <li ><a  href="shop.php">Shop</a></li>
                    <li  >
                        <button class="btn btn-outline-black bg-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $panier; ?></span>
                        </button>
                    </li>

                    <li ><a class="btn btn-rounded" href="signin.html">SIGN IN / SIGN UP</a></li>
                </ul>

            </div>

        </div>
    </nav>

    <!-- Index -->
    <header class="head head-default">
        <div class="container">
            <h1 class="lead text-center">Hostips</h1>
            <p class="tagline text-center">welcome to Hostips, the site for good deals</p>
            <p class="text-center">
                <a class="btn btn-default btn-lg" href="tendency.php">Tendency</a>
                <a class="btn btn-action btn-lg" href="shop.php">BUY
                    NOW FOR $19</a>
            </p>
        </div>
    </header>


    <section class="section section-intro">
        <div class="container">
            <h1 class="text-center">Trending items</h1>
            <h2 class="text-center text-muted">
                here are the favorite items of our customers.
            </h2>
        </div>
    </section>
    
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section section-faq">
        <div class="container">
            <h2 class="text-center title">Frequently Asked Questions</h2>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>What is the delivery time ?</b></h4>
                    <p>We deliver the packages within 10 to 15 working days</p>
                </div>
                <div class="col-sm-6">
                    <h4><b>What is the return policy ?</b></h4>
                    <p>
                    You have 1 month after your purchase to start a return request</br></p>
                    <p class="bg-red">For more information <a href="Retour.php"></a>
                                    </p>
                </div>
            </div>
            <div class="row topspace">
                <div class="col-sm-6">
                    <h4><b>What is the duration ?</b></h4>
                    <p>
                    The warranty varies depending on the product but they follow the European standard of 2 years minimum.
                    </p>
                </div>
                <div class="col-sm-6">
                    <h4><b>How can I contact customer service</b></h4>
                    <p>Customer service is available 24 hours a day at this e-mail address</p>
                    <a href="mailto:customerservice_hostips@gmail.com" class="btn btn-primary">customerservice_hostips@gmail.com </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonials jumbotron">
        <div class="container">
            <h2 class="title text-center topspace">What people are saying about us?</h2>
            <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="row item active">
                        <div class="col-sm-3 profile">
                            <img src="assets/images/people/1.jpg" alt="" />
                        </div>
                        <div class="col-sm-9 content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>Ce site est incroyable</p>
                            </blockquote>
                            <p class="source">Mario Hayes
                                <br /><span class="title">Co-Founder, Superawesome Inc</span>
                            </p>
                        </div>

                    </div>

                    <div class="row item">
                        <div class="col-sm-3 profile">
                            <img src="assets/images/people/2.jpg" alt="" />
                        </div>
                        <div class="col-sm-9 content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>Merci trop content de mon ordi!</p>
                            </blockquote>
                            <p class="source">Erin Mendoza
                                <br /><span class="title">Entrepreneur, GT corp</span>
                            </p>
                        </div>

                    </div>

                    <div class="row item">
                        <div class="col-sm-3 profile">
                            <img src="assets/images/people/3.jpg" alt="" />
                        </div>
                        <div class="col-sm-9 content">
                            <blockquote>
                                <i class="fa fa-quote-left"></i>
                                <p>COlis arriver sans probleme mon fils est tres content!</p>
                            </blockquote>
                            <p class="source">Dwight Ray
                                <br /><span class="title">CTO, Drave</span>
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <footer id="footer" class="clearfix">
        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>+234 23 9873237<br>
                                <a href="/cdn-cgi/l/email-protection#6043"><span class="__cf_email__"
                                        data-cfemail="91e2fefcf4bff4fcf0f8fdd1e2fefcf4e6f9f4e3f4bff2fefc">[email&#160;protected]</span></a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Follow us</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                <a href=""><i class="fa fa-github fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 widget">
                        <h3 class="widget-title">Text widget</h3>
                        <div class="widget-body">
                            <p>Ce site fut l'idee de 2 jeunes qui n'arrivaient pas à trouver sur internet les objets qu'ils
                                pensaientt indispensable.
                                Des objets locaux et facile d'acces pour tous. C'est pourquoi ils creairent Hostips.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="inde.php">Home</a> |
                                <a href="about.php">About</a> |
                                <a href="contact.php">Contact</a> |
                                <b><a href="signup.html">Sign up</a></b>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2022, Your name. Design: Hostips</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m) c
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-48366846-1', 'gettemplate.com');
    ga('send', 'pageview');
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>

</html>