<!--Main layout-->
<main class="mt-5 pt-5">
        <!--Grid row-->
        <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <!--Card-->
                    <div class="card card-cascade wider reverse">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="img/sample.jpg" class="img-fluid" alt="Material Design for Bootstrap - example photo" style="background: fixed center no-repeat url(img/bg.jpg); background-size: cover;">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/Card image-->
                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title">
                                <strong><?php echo $post->title; ?></strong>
                            </h4>
                            <h5 class="indigo-text">
                                <strong>category:<?php echo $post->category; ?>Time:<?php echo $post->updated_at; ?></strong>
                            </h5>
                            <p class="card-text"></p>
                        </div>
                        
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->



            <!--Section: Blog-->
        <section class="section text-center">

                <!--Section heading-->
                <!-- Story box -->
                <div class="jumbotron p-5 text-center text-md-left author-box">
                    <!-- Name -->
                    <div class="row">
                        <!-- Avatar -->
                            <?php echo $post->body; ?>                                               
                        </div>
                    </div>
                </div>
                <!-- Author box -->
            </section>

                <!--Call to action-->
        <div class="pt-4 text-center">
                <button type="button" class="btn btn-primary waves-effect waves-light">
                        <i class="fa fa-thumbs-up left"></i>
                        <span>Likes</span>
                    </button>
                    <span class="badge">22</span>
            </div>
            <!--/.Call to action-->

            <!--Section heading-->
            <!-- Author box -->
            <div class="jumbotron p-5 text-center text-md-left author-box">
                    <!-- Name -->
                    <h3 class="h3-responsive text-center font-weight-bold dark-grey-text">About author</h3>
                    <hr>
                    <div class="row">
                        <!-- Avatar -->
                        <div class="col-12 col-md-2 mb-md-0 mb-4">
                            <img src="./Bootstrap Components - visual guide to components of Bootstrap 4 - Material Design for Bootstrap_files/img (8).jpg" class="img-fluid rounded-circle z-depth-2 avatar">
                        </div>
                        <!-- Author Data -->
                        <div class="col-12 col-md-10">
                            <h5 class="font-weight-bold dark-grey-text mb-3">
                                <strong>John Doe</strong>
                            </h5>
                            <div class="personal-sm pb-3">
                                <a class="pr-2 email-ic">
                                    <i class="fa fa-home mr-2"> </i>
                                </a>
                                <a class="pr-2 fb-ic">
                                    <i class="fa fa-facebook mr-2"> </i>
                                </a>
                                <a class="pr-2 tw-ic">
                                    <i class="fa fa-twitter mr-2"> </i>
                                </a>
                                <a class="pr-2 gplus-ic">
                                    <i class="fa fa-google-plus mr-2"> </i>
                                </a>
                                <a class="pr-2 li-ic">
                                    <i class="fa fa-linkedin mr-2"> </i>
                                </a>
                            </div>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint esse nulla quia quam veniam commodi
                                dicta, iusto inventore. Voluptatum pariatur eveniet ea, officiis vitae praesentium beatae quas
                                libero, esse facere.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Author box -->
    <h5 class="py-5">Comments List</h5>
    
            <!--Section: Comments list-->
            <section class="">
    
                <!--Main wrapper-->
                <div class="comments-list text-center text-md-left mb-5">
                    <div class="text-center mb-4">
                        <h3>Comments
                            <span class="badge blue">3</span>
                        </h3>
                    </div>
                    <!--First row-->
                    <div class="row mb-4">
                        <!--Image column-->
                        <div class="col-sm-2 col-12 mb-md-0 mb-3">
                            <img src="./Bootstrap Components - visual guide to components of Bootstrap 4 - Material Design for Bootstrap_files/img (27).jpg" class="avatar rounded-circle z-depth-1-half">
                        </div>
                        <!--/.Image column-->
                        <!--Content column-->
                        <div class="col-sm-10 col-12">
                            <a>
                                <h4 class="font-weight-bold">John Doe</h4>
                            </a>
                            <div class="mt-2">
                                <ul class="list-unstyled">
                                    <li class="comment-date">
                                        <i class="fa fa-clock-o"></i> 05/10/2015</li>
                                </ul>
                            </div>
                            <p class="grey-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                        <!--/.Content column-->
                    </div>
                    <!--/.First row-->
                    <!--Second row-->
                    <div class="row mb-4">
                        <!--Image column-->
                        <div class="col-sm-2 col-12 mb-md-0 mb-3">
                            <img src="./Bootstrap Components - visual guide to components of Bootstrap 4 - Material Design for Bootstrap_files/img (1).jpg" class="avatar rounded-circle z-depth-1-half">
                        </div>
                        <!--/.Image column-->
                        <!--Content column-->
                        <div class="col-sm-10 col-12">
                            <a>
                                <h4 class="font-weight-bold">Marta Tev</h4>
                            </a>
                            <div class="mt-2">
                                <ul class="list-unstyled">
                                    <li class="comment-date">
                                        <i class="fa fa-clock-o"></i> 08/10/2015</li>
                                </ul>
                            </div>
                            <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        </div>
                        <!--/.Content column-->
                    </div>
                    <!--/.Second row-->
                    <!--Third row-->
                    <div class="row mb-4">
                        <!--Image column-->
                        <div class="col-sm-3 col-md-2 col-12 mb-md-0 mb-3">
                            <img src="./Bootstrap Components - visual guide to components of Bootstrap 4 - Material Design for Bootstrap_files/img (31).jpg" class="avatar rounded-circle z-depth-1-half">
                        </div>
                        <!--/.Image column-->
                        <!--Content column-->
                        <div class="col-sm-9 col-md-10 col-12">
                            <a>
                                <h4 class="font-weight-bold">Anna Maria</h4>
                            </a>
                            <div class="mt-2">
                                <ul class="list-unstyled">
                                    <li class="comment-date">
                                        <i class="fa fa-clock-o"></i> 17/10/2015</li>
                                </ul>
                            </div>
                            <p class="grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique sunt in culpa qui officia.
                            </p>
                        </div>
                        <!--/.Content column-->
                    </div>
                    <!--/.Third row-->
                </div>
    </main>

            
            <!--/.Main wrapper-->
    <!--Main layout-->