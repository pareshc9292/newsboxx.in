<?php include "shop/header.php"; ?>
<?php require_once "include/db.php" ?>
<?php if(isset($_GET['search'])){
                    $search_term = mysqli_real_escape_string($con, $_GET['search']);
                        ?>

<div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-shopping-cart bg-orange"></i> Shop  <small class="hidden-xs-down hidden-sm-down"> Search : <?php echo $search_term;  ?></small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="tech-index.php">Home</a></li>
                            <li class="breadcrumb-item active"> Shop  </li>
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
                        <div class="blog-grid-system">
                            <div class="row">

                              <?php 
                              include "include/db.php";
                                /* Calculate Offset Code */
                                $limit = 9;
                                if(isset($_GET['page']))
                                  {
                                    $page = $_GET['page'];
                                  }else
                                  {
                                    $page = 1;
                                  }
                                $offset = ($page - 1) * $limit;

                                $sql = "SELECT `shop`.m_id,`shop`.image, `shop`.brand, `shop`.model,`shop`.price,`shop`.display,
                                `shop`.ram,`shop`.processor,`shop`.storage,`shop`.f_camera,`shop`.r_camera,`shop`.battery,`shop`.os FROM `shop`
                                WHERE `shop`.brand LIKE '%{$search_term}%' OR `shop`.model LIKE '%{$search_term}%' OR `shop`.price LIKE '%{$search_term}%'
                                ORDER BY `shop`.m_id DESC LIMIT {$offset},{$limit}";
                                    $result = mysqli_query($con, $sql) or die("Query Failed.");
                                    if(mysqli_num_rows($result) > 0){
                                      while($row = mysqli_fetch_assoc($result)) {
                              ?>

                               <div class="col-md-4">
                                    <div >
                                        <a target="_blank"  href="<?php echo $row ['image']; ?> "/>
                                   
                                        <div class="post-media">
                                              
                                            
                                        </div><!-- end media -->
                                        <div class="blog-meta big-meta">
                                            <span class="color-orange"><a href="gadget-single.php?id=<?php echo $row['m_id']; ?>" title=""><?php echo $row['brand'];?></a></span>
                                            <h4><a href="<?php echo $row ['link']; ?>" title=""><?php echo $row['model'] ; ?></a></h4>
                                            <p><i class="fa fa-mobile" aria-hidden="true" > Display - <?php echo $row['display']; ?></i></p>
                                            <p><i class="fa fa-microchip" aria-hidden="true" > Ram - <?php echo $row['ram']; ?></i></p>
                                            <p><i class="fa fa-sd-card" aria-hidden="true" > Storage - <?php echo $row['storage']; ?></i></p>
                                            <p><i class="fa fa-microchip" aria-hidden="true" > Processor - <?php echo $row['processor']; ?></i></p>
                                            <p><i class="fa fa-dot-circle-o" aria-hidden="true" > Front Camera - <?php echo $row['f_camera']; ?></i></p>
                                            <p><i class="fa fa-camera" aria-hidden="true" > Rear Camera - <?php echo $row['r_camera']; ?></i></p>
                                            <p><i class="fa fa-battery-half" aria-hidden="true" > Battery - <?php echo $row['battery']; ?></i></p>
                                            <p><i class="fa fa-<?php echo $row['os_icon'];?>" aria-hidden="true" > Operating System - <?php echo $row['os']; ?></i></p>
                                            <span class="color-orange"><a href="gadget-single.php?id=<?php echo $row['m_id']; ?>" title=""> Price - ₹.<?php echo $row['price'];?></a></span>
                                            <br>
                                            <span class="input-group-btn">
                                              <button class="btn btn-default"><a href="<?php echo $row ['link']; ?>"><i class="fa fa-shopping-cart"> </i> Buy Now</a></button>
                                            </span> 
                                            
                                        </div><!-- end meta -->
                                      <br>
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                                  
                                  
                                <?php
                          } }
                        }
                        else{
                          echo "<h2>No Record Found.</h2>";
                        }
                        // show pagination                      
                        $sql1 = "SELECT * FROM `shop` WHERE `shop`.brand LIKE '%{$search_term}%' OR `shop`.model LIKE '%{$search_term}%'";
                        $result1 = mysqli_query($con, $sql1) or die("Query Failed.");
                        if(mysqli_num_rows($result1) > 0)
                        {
                          $total_records = mysqli_num_rows($result1);
                          $total_page = ceil($total_records / $limit);
                          echo '<ul class="pagination justify-content-start">';
                          if($page > 1){
                            echo '<li><a class="page-link" href="search shop.php?page='.($page - 1).'">Prev</a></li>';
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
                              echo '<li class=""><a class="'.$active.'" href="search shop.php?page='.$i.'">'.$i.'</a></li>';
                          }
                          if($total_page > $page){
                            echo '<li ><a class="page-link" href="search shop.php?page='.($page + 1).'">Next</a></li>';
                          }
                          echo '</ul>';
                        }
                        
                     ?>   
                              </div><!-- end row -->
                        </div><!-- end blog-grid-system -->
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                      <?php include "gadget/sidebar.php"; ?>
                </div><!-- end col -->
                
            </div><!-- end row -->
        </div><!-- end container -->
</section>
       
       
<?php include "gadget/footer.php"; ?>