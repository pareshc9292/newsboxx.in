<?php require_once "include/header.php" ?>
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <?php
                include "include/db.php";
                $u_id = $_GET['u_id'];

                $query = "SELECT * FROM `upcoming-device` WHERE u_id = {$u_id}";
                $data = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($data))
                
                {
                    $image = $row['image'];
                    $heading = $row['heading'];
                    $news = $row['news'];
                    $category = $row['category'];
                    $tag = $row['tag'];
                    $date = $row['date'];
                    $author = $row['author'];
                    $views = $row['views'];
                }
                $query="UPDATE `upcoming-device` SET `views`=`views`+ 1 WHERE `u_id`=$u_id "; 
                $data = mysqli_query($con,$query);
                ?>
            
                
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                    <li class="breadcrumb-item active"><?php echo $heading ?></li>
                                </ol>

                                <span class="color-orange"><a href="tech-category-01.html" title=""><?php echo $category ?></a></span>

                                <h3><?php echo $heading ?></h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="tech-single.html" title=""><?php echo $date ?></a></small>
                                    <small><a href="tech-author.html" title=""><?php echo $author ?></a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> <?php echo  $views ?></a></small>
                                </div><!-- end meta -->

                                
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                          <a href="#" > <img src="img/ads/728x90/728x90-kikkoman.jpg" alt="" class="img-fluid"></a>
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->
                            

                            <div class="single-post-media">
                                <img src="img/upcoming-device/<?php echo $image ?>" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p><?php echo $news ?> </p>

                                </div><!-- end pp -->

                            </div><!-- end content -->
                         
                            <div class="blog-title-area">
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    <small><a href="#" title=""><?php echo $tag ?></a></small>
                                    
                                </div><!-- end meta -->
                            

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                          <a href="#" > <img src="img/ads/728x90/728x90-kikkoman.jpg" alt="" class="img-fluid"></a>
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis1">

                          

                            <hr class="invis1">

                            <!-- <div class="custombox authorbox clearfix">
                                <h4 class="small-title">About author</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                                    </div>

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#">Jessica</a></h4>
                                        <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Tech Blog!</p>

                                        <div class="topsocial">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div> -->

                            <hr class="invis1">

                          

                            <hr class="invis1">

                            
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                  <?php require_once "include/sidebar.php" ?>

        <?php require_once "include/footer.php" ?>