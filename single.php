<?php require_once "include/header.php" ?>
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                <?php
                include "include/db.php";
                $post_id = $_GET['id'];
                $query = "select * from post WHERE post.post_id = {$post_id}";
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
                $query="UPDATE `post` SET `views`=`views`+ 1 WHERE `post_id`=$post_id "; 
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
                                          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                        <!-- 728x90 -->
                                        <ins class="adsbygoogle"
                                             style="display:inline-block;width:728px;height:90px"
                                             data-ad-client="ca-pub-3363682890176830"
                                             data-ad-slot="1168858279"></ins>
                                        <script>
                                             (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        
                                        <li><a href="#" class="gp-button btn btn-primary"> <i class="fa fa-google-plus"> </i> Share on Gmail</a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->
                            

                            <div class="single-post-media">
                                <img src="img/home/<?php echo $image ?>" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p><?php echo nl2br($news); ?> </p>

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
                                        
                                        <li><a href="#" class="gp-button btn btn-primary"> <i class="fa fa-google-plus"> </i> Share on Gmail</a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                        <!-- 728x90 -->
                                        <ins class="adsbygoogle"
                                             style="display:inline-block;width:728px;height:90px"
                                             data-ad-client="ca-pub-3363682890176830"
                                             data-ad-slot="1168858279"></ins>
                                        <script>
                                             (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
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
                            <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B005FYNT3G&asins=B005FYNT3G&linkId=55f79db0e1e5ee975f435c75deb3618f&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                                </iframe>
                                
                                <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B08DRR5D14&asins=B08DRR5D14&linkId=8d73658b7777471ffb22ea8d41596fd5&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                               </iframe>
                               
                               <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B086CSGV2N&asins=B086CSGV2N&linkId=71cf11f52e69153c5be435bc93c18e81&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>
                               
                               <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B07GVR9TG7&asins=B07GVR9TG7&linkId=c184ac2fc0387198f846e3a529b0d58a&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                               </iframe>
                               
                               <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B07C2VJXP4&asins=B07C2VJXP4&linkId=3c9b0491e3d276c27785dadd0d61effa&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                             </iframe>
                             
                             <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=newsboxx-21&marketplace=amazon&region=IN&placement=B01EFVDDH6&asins=B01EFVDDH6&linkId=479cbe024fd19428933e232049f53f57&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
                            </iframe>
                             
                             
    

                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                  <?php require_once "include/sidebar.php" ?>

        <?php require_once "include/footer.php" ?>