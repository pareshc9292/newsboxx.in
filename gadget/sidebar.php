
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img/ads/sidebar/300x600/bec19752bf2670faadecb2e91dff09ff.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img/ads/sidebar/6240x7402/obi-onyeador-oL3-V8xhqlI-unsplash.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                           
                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <?php 
                                    require_once "include/db.php";
                                    $limit = 3;
                                    $sql = "SELECT post.post_id, post.heading, post.date,post.image FROM post                              
                                    ORDER BY post.views DESC LIMIT {$limit}";
                                    $result = mysqli_query($con, $sql) or die("Query Failed. : Recent Post");
                                    if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?> 
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.php?id=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="img/home/<?php echo $row['image']; ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo substr( $row['heading'],0,40).'..';?></h5>
                                                <small><?php echo $row['date']; ?></small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                                <?php } } ?>
                            </div><!-- end widget -->
                                    
                           

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>     
                                <div class="blog-list-widget">
                                <?php 
                                    require_once "include/db.php";
                                    $limit = 3;
                                    $sql = "SELECT post.post_id, post.heading, post.date,post.image FROM post                              
                                    ORDER BY post.post_id DESC LIMIT {$limit}";
                                    $result = mysqli_query($con, $sql) or die("Query Failed. : Recent Post");
                                    if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?>                                
                                    <div class="list-group">                                                                               
                                        <a href="single.php?id=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="img/home/<?php echo $row['image']; ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo substr( $row['heading'],0,40).'..';?></h5>
                                                <small><?php echo $row['date']; ?></small>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } } ?>
                                </div><!-- end blog-list -->                               
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                          
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                       
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                       
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img/ads/sidebar/6240x7402/obi-onyeador-oL3-V8xhqlI-unsplash.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img/ads/sidebar/300x600/bec19752bf2670faadecb2e91dff09ff.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    
