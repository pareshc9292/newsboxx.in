<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                     <div class="banner-img">
                                        <script type="text/javascript" language="javascript">
                                          var aax_size='300x600';
                                          var aax_pubname = 'newsboxx-21';
                                          var aax_src='302';
                                        </script>
                                        <script type="text/javascript" language="javascript" src="https://c.amazon-adsystem.com/aax2/assoc.js"></script>
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                            <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B08696XB4B&asins=B08696XB4B&linkId=6e7c9f64ffb798f0eb010e35bef9f514&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>
                            <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B08696XB3V&asins=B08696XB3V&linkId=2fb57186ea5dfd12ba73fa7503fbb655&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>

                            

                           
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
                                        <script type="text/javascript" language="javascript">
                                          var aax_size='300x250';
                                          var aax_pubname = 'newsboxx-21';
                                          var aax_src='302';
                                        </script>
                                        <script type="text/javascript" language="javascript" src="https://c.amazon-adsystem.com/aax2/assoc.js"></script>
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                       <script type="text/javascript" language="javascript">
                                          var aax_size='300x600';
                                          var aax_pubname = 'newsboxx-21';
                                          var aax_src='302';
                                        </script>
                                        <script type="text/javascript" language="javascript" src="https://c.amazon-adsystem.com/aax2/assoc.js"></script>
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
       
