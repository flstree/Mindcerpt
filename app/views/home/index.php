
<!-- Main jumbotron for a primary marketing message or call to action -->
<!-- <div class="jumbotron">
  <div class="container">
    <h1 class="display-3"><?//= APP_NAME . ' v' . APP_VERSION ?></h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>

<div class="container"> -->
  <!-- Example row of columns -->
  <!-- <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>

  <hr>

</div>  -->

<!-- /container -->

<!--Main layout-->
<main class="mt-5 pt-5">
        <div class="container">
            
            <div class="filter-button-group button-group text-center">
                <button class="btn btn-dark" data-filter="*">All</button>
                <button class="btn btn-dark" data-filter=".fiction">Fiction</button>
                <button class="btn btn-dark" data-filter=".thriller">Thriller</button>
                <button class="btn btn-dark" data-filter=".dark">Dark</button>
            </div>

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">
                    <?php $i = 0; ?>
                    <?php foreach ($posts as $post) :?>
                        <?php if($i = 0 || $i = 3 || $i = 6) :?>
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">

                            <!--Card-->
                            <div class="card card-cascade narrower item fiction">
                        <?php else:  ?>
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-cascade narrower">
                        <?php endif; ?>


                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://res.cloudinary.com/dingeoc/image/upload/v1538658685/13.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div> 
                                <!--/.Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <h5 class="pink-text">
                                        <i class="fa fa-link pull-left"> <?php echo $post->category; ?></i> 
                                        <i class="fa fa-clock-o pull-right"> <?php echo $post->updated_at;; ?></i>
                                    </h5><br>
                                    <!--Title-->
                                    <h4 class="card-title"><?php echo $post->title; ?></h4>
                                    <!--Text-->
                                    <p class="card-text"><?php echo substr($post->body, 0, 125) . '...'; ?></p>
                                    <a href="<?php echo URL_ROOT . 'post/id/' . $post->id; ?>" class="btn btn-primary waves-effect waves-light">Read More 
                                        <i class="fa fa-play ml-2"></i>
                                    </a>
                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->
                        <?php $i++; ?>
                    <?php endforeach; ?>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                    <div class="card card-cascade narrower">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://res.cloudinary.com/dingeoc/image/upload/v1538658686/3.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo">
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
                            </h5><br>
                            <!--Title-->
                            <h4 class="card-title">Story Title</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                                ut aliquid ex ea commodi.</p>
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
                            </h5><br>
                            <!--Title-->
                            <h4 class="card-title">Story Title</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                                ut aliquid ex ea commodi.</p>
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
                            </h5><br>
                            <!--Title-->
                            <h4 class="card-title">Story Title</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                                ut aliquid ex ea commodi.</p>
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
                            </h5><br>
                            <!--Title-->
                            <h4 class="card-title">Story Title</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                                ut aliquid ex ea commodi.</p>
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
                            </h5><br>
                            <!--Title-->
                            <h4 class="card-title">Story Title</h4>
                            <!--Text-->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                                ut aliquid ex ea commodi.</p>
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

                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue">

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->
