<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="./index.html">
                    <strong class="blue-text">MindCerpt</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#about-us">About MindCerpt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="blog.html">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#contact-us">Contact Us</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/mindcerpt" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.twitter.com/mindcerpt" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline">
                                <div class="md-form mt-0">
                                    <div class="waves-input-wrapper waves-effect waves-light" style="display: block;">
                                        <input class="form-control mr-sm-2" type="text" placeholder=" Search Stories" aria-label="Search" style="display: inline;">
                                        <a href="#" class="nav-link waves-effect" style="display: inline;"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background: fixed center no-repeat url(img/bg.jpg); background-size: cover;">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Welcome to MindCerpt</strong>
                    </h1>
                    <p>
                        <strong>Short Stories that capture our imaginations.</strong>
                    </p>
                    <p class="mb-4">
                        <strong>We seek an understanding of our minds interaction with stories and how they react it based on behavioural tendencies.</strong>
                    </p>
                    <a href="#about-us" class="btn btn-outline-white waves-effect btn-lg">About Us
                        <i class="fa fa-caret-down ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <section id="about-us">
                <hr class="my-5">
                <div class="container text-center">
                    <h1 style="margin-top: 100px !important;">About MindCerpt</h1>

                    <p class="lead text-center pt-3" style="margin: 0 auto; width: 70%;">Mincerpt is a set of short stories which tries to capture our thought processes when we are in difficult
                        situations. Miindcerpt plays around the realm of devastation, death, sex, hope, destruction, psychosis,
                        and so much more.</p>
                    <img src="img/about-me-signature.png" alt="" class="nk-img-fit my-5">
                </div>
            </section>

            <hr class="my-5">

            <div class="container" style="display: block; width:80%; margin: 0 auto;">
                <div class="row">
                    <div class="col-md-6 col-lg-3 text-center">
                        <i class="fa fa-users fa-3x"></i>
                        <div class="nk-ibox-title">
                            <span>50</span> Subscribers</div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <i class="fa fa-book fa-3x"></i>
                        <div class="nk-ibox-title">
                            <span>200</span> Stories</div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <i class="fa fa-link fa-3x"></i>
                        <div class="nk-ibox-title">
                            <span>5</span> Categories</div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center">
                        <i class="fa fa-thumbs-up fa-3x"></i>
                        <div class="nk-ibox-title">
                            <span>2025</span> Likes</div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">
                <h1 class="my-5">Latest Stories</h1>

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower item fiction">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <h5 class="pink-text">
                                    <i class="fa fa-link pull-left"> Category</i>
                                    <i class="fa fa-clock-o pull-right"> Time</i>
                                </h5>
                                <br>
                                <!--Title-->
                                <h4 class="card-title">Story Title</h4>
                                <!--Text-->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                    nisi ut aliquid ex ea commodi.</p>
                                <a class="btn btn-primary waves-effect waves-light">Read More
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <h5 class="pink-text">
                                    <i class="fa fa-link pull-left"> Category</i>
                                    <i class="fa fa-clock-o pull-right"> Time</i>
                                </h5>
                                <br>
                                <!--Title-->
                                <h4 class="card-title">Story Title</h4>
                                <!--Text-->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                    nisi ut aliquid ex ea commodi.</p>
                                <a class="btn btn-primary waves-effect waves-light">Read More
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <h5 class="pink-text">
                                    <i class="fa fa-link pull-left"> Category</i>
                                    <i class="fa fa-clock-o pull-right"> Time</i>
                                </h5>
                                <br>
                                <!--Title-->
                                <h4 class="card-title">Story Title</h4>
                                <!--Text-->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                    nisi ut aliquid ex ea commodi.</p>
                                <a class="btn btn-primary waves-effect waves-light">Read More
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <h1 class="my-5">Popular Stories</h1>

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <h5 class="pink-text">
                                    <i class="fa fa-link pull-left"> Category</i>
                                    <i class="fa fa-clock-o pull-right"> Time</i>
                                </h5>
                                <br>
                                <!--Title-->
                                <h4 class="card-title">Story Title</h4>
                                <!--Text-->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                    nisi ut aliquid ex ea commodi.</p>
                                <a class="btn btn-primary waves-effect waves-light">Read More
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <h5 class="pink-text">
                                    <i class="fa fa-link pull-left"> Category</i>
                                    <i class="fa fa-clock-o pull-right"> Time</i>
                                </h5>
                                <br>
                                <!--Title-->
                                <h4 class="card-title">Story Title</h4>
                                <!--Text-->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                    nisi ut aliquid ex ea commodi.</p>
                                <a class="btn btn-primary waves-effect waves-light">Read More
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <h5 class="pink-text">
                                    <i class="fa fa-link pull-left"> Category</i>
                                    <i class="fa fa-clock-o pull-right"> Time</i>
                                </h5>
                                <br>
                                <!--Title-->
                                <h4 class="card-title">Story Title</h4>
                                <!--Text-->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                    nisi ut aliquid ex ea commodi.</p>
                                <a class="btn btn-primary waves-effect waves-light">Read More
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <div class="my-5">
                    <a href="blog.html" class="btn btn-primary waves-effect waves-light">View All Stories
                        <i class="fa fa-book ml-2"></i>
                    </a>
                </div>

            </section>
            <!--Section: Cards-->

            <!-- Section: Testimonials -->
            <section class="container z-depth-2" style="background-color: rgba(8, 8, 8, 0.76);">
                <div class="container text-center" style="color: white;">
                    <h1 style="padding-top: 5px;">Testimonials</h1>
                    <p>What People say about us</p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide z-depth-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-md-block w-100" src="img/parallax/1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block" style="color: black;">
                                <p>This is what they said about our product. Maecenas molestie pulas molestie pulvinar augue.
                                    Ut quis sem ut neque gravida ullamcorper. Nunc nisi risus, accumsan nec elit ac, molvinar
                                    augue. Ut quis sem ut neque gravida ullamcorper.</p>
                                <cite>Johnny Doe</cite>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-md-block w-100" src="img/parallax/1.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block" style="color: black;">
                                <p>This is what they said about our product</p>
                                <cite>Johnny Doe</cite>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-md-block w-100" src="img/parallax/1.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block" style="color: black;">
                                <p>They said they loved it.</p>
                                <cite>Johnny Doe</cite>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="color: #4285f4;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="color: #4285f4;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <!-- Section: Testimonials -->

            <!-- Section: Our Team -->
            <section class="text-center">
                
            </section>
            <!-- Section: Our Team -->

            <!-- Section: Contact Us -->
            <section class="text-center" id="contact-us">
                    <hr class="my-5">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 style="font-size: 2.6em;">Contact Info</h2>
                        <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices
                            vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam
                            consectetur.</p>
                        <ul>
                            <li>
                                <strong>Address:</strong> 10111 Santa Monica Boulevard, LA</li>
                            <li>
                                <strong>Phone: </strong> +44 987 065 908</li>
                            <li>
                                <strong>Email: </strong> info@example.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <!--Form without header-->
                        <div class="card card-image" style="background-image: url(img/sample.jpg)">
                            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                                <h1>Send Us a Message</h1>
                                <!--Body-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="Form-name" class="form-control white-text">
                                            <label for="Form-name">Your name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="Form-email" class="form-control white-text">
                                            <label for="Form-email">Your email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form">
                                    <input type="text" id="Form-title" class="form-control white-text">
                                    <label for="Form-title">Your Title</label>
                                </div>

                                <div class="md-form my-3">
                                    <textarea name="message" id="Form-message" rows="4" class="form-control white-text required" placeholder="Your Message" aria-required="true" style="padding: 4px;"></textarea>
                                </div>


                                <!--Grid row-->
                                <div class="row d-flex align-items-center mb-4">

                                    <!--Grid column-->
                                    <div class="text-center mb-3 col-md-12">
                                        <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1 waves-effect waves-light">SEND</button>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->

                            </div>
                        </div>
                        <!--/Form without header-->
                    </div>
                </div>
            </section>
            <!-- Section: Contact Us -->
            <hr class="my-5">
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
                <button type="button" class="btn btn-outline-white" data-toggle="modal" data-target="#subscribe">
                        Subscribe to our mailing list
                </button>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribeTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="subscribeLongTitle">Something Here</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
        <!-- /MODAL -->
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mindcerpt" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/mindcerpt" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://efellow.com/mindcerpt/" target="_blank"> MindCerpt.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>