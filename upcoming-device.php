<?php require_once "upcoming device/header.php";  ?>
<div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-laptop bg-orange"></i> UpComing Device's <small class="hidden-xs-down hidden-sm-down"> </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="tech-index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                            <li class="breadcrumb-item active"> UpComing Device's </li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->
<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                       <div class="page-wrapper">
                       
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Upcoming Device's <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->
                            <?php
                        include "include/db.php";
                        /* Calculate Offset Code */
                        $limit = 12;
                        if(isset($_GET['page']))
                          {
                            $page = $_GET['page'];
                          }else
                          {
                            $page = 1;
                          }
                        $offset = ($page - 1) * $limit;

                        $sql = "SELECT * FROM `upcoming-device` ORDER BY u_id DESC LIMIT {$offset},{$limit}";
                        $result = mysqli_query($con, $sql) or die("Server Not Found.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                              
                              <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="ud-single.php?u_id=<?php echo $row['u_id']; ?>" title="">
                                                <img src="img/upcoming-device/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="ud-single.php?u_id=<?php echo $row['u_id']; ?>" title=""><?php echo substr($row['heading'],0,95); ?></a></h4>
                                        <p><?php echo substr($row['news'],0,140) . "..."; ?> </p>
                                        <small class="firstsmall"><a class="bg-orange" href="category-01.html" title=""><?php echo $row['category']; ?></a></small>
                                        <small><a href="ud-single.php?u_id=<?php echo $row['u_id']; ?>" title=""><?php echo $row['date']; ?></a></small>
                                        <small><a href="author.html" title=""><?php echo $row['author']; ?></a></small>
                                        <small><a href="ud-single.php?u_id=<?php echo $row['u_id']; ?>" title=""><i class="fa fa-eye"></i> <?php echo $row['views']; ?></a></small>
                                       
                                    </div>
                                </div>
                             </div>
                             
                             <hr class="invis">

                     <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }
                        // show pagination                      
                        $sql1 = "SELECT * FROM `upcoming-device` ";
                        $result1 = mysqli_query($con, $sql1) or die("Query Failed.");
                        if(mysqli_num_rows($result1) > 0)
                        {
                          $total_records = mysqli_num_rows($result1);
                          $total_page = ceil($total_records / $limit);
                          echo '<div class="row">
                          <div class="col-md-12">';
                          echo '<nav aria-label="Page navigation">';
                          echo '<ul class="pagination justify-content-start">';
                          if($page > 1){
                            echo '<li><a class="page-link" href="upcoming-device.php?page='.($page - 1).'">Prev</a></li>';
                          }
                          for($i = 1; $i <= $total_page; $i++)
                          {
                              if($i == $page)
                              {
                               
                                $active = 'page-link ';
                              }else
                              {
                                
                                $active = 'page-link';
                              }
                              echo '<li class=""><a class="'.$active.'" href="upcoming-device.php?page='.$i.'">'.$i.'</a></li>';
                          }
                          if($total_page > $page){
                            echo '<li ><a class="page-link" href="upcoming-device.php?page='.($page + 1).'">Next</a></li>';
                          }
                          echo '</ul>';
                          echo '</nav>';
                          echo '</div>
                                </div>';
                        }
                        
                     ?>
                      
                     

                                <!-- <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_blog_06.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div>
                                    </div> -->
    
                    </div><!-- end col -->
                    
            </div>    
                    

<?php require_once "include/sidebar.php" ?>  

<?php require_once "include/footer.php"  ?>     