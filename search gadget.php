<?php include "gadget/header.php"; ?>
<?php require_once "include/db.php" ?>
<?php if(isset($_GET['search'])){
                    $search_term = mysqli_real_escape_string($con, $_GET['search']);
                        ?>

<div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-laptop  bg-orange"></i> Search : <?php echo $search_term;  ?> <small class="hidden-xs-down hidden-sm-down"> </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Videos</li>
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
                            <div class="blog-top clearfix">
                           
                                <h4 class="pull-left">Search : <?php echo $search_term;  ?></h4>
                            </div><!-- end blog-top -->

                                <div class="row">
                                  <?php include "include/db.php";
                                   /* Calculate Offset Code */
                                    $limit = 18;
                                    if(isset($_GET['page']))
                                      {
                                        $page = $_GET['page'];
                                      }else
                                      {
                                        $page = 1;
                                      }
                                    $offset = ($page - 1) * $limit;

                                    $sql = "SELECT `gadget`.g_id,`gadget`.image, `gadget`.name, `gadget`.specifications,`gadget`.date,`gadget`.category,
                                    `gadget`.tag,`gadget`.views FROM `gadget`
                                    WHERE `gadget`.name LIKE '%{$search_term}%' OR `gadget`.specifications LIKE '%{$search_term}%'
                                    ORDER BY `gadget`.g_id DESC LIMIT {$offset},{$limit}";
                                        $result = mysqli_query($con, $sql) or die("Query Failed.");
                                        if(mysqli_num_rows($result) > 0){
                                          while($row = mysqli_fetch_assoc($result)) {
                                  ?>

                                      <div class="col-md-4">
                                          <div class="blog-box">
                                              <div class="post-media">
                                                  <a href="gadget-single.php?g_id=<?php echo $row['g_id']; ?>" title="">
                                                      <img src="img/gadget/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                                      <div class="hovereffect">
                                                          
                                                      </div><!-- end hover -->
                                                  </a>
                                              </div><!-- end media -->
                                              <div class="blog-meta big-meta">
                                                  <span class="color-orange"><a href="gadget-single.php?g_id=<?php echo $row['g_id']; ?>" title=""><?php echo $row['category'];?></a></span>
                                                  <h4><a href="gadget-single.php?g_id=<?php echo $row['g_id']; ?>" title=""><?php echo substr($row['name'],0,38) . "..."; ?></a></h4>
                                                  <p><?php echo substr($row['specifications'],0,140) . "..."; ?></p>
                                                  <small><a href="gadget-single.php?g_id=<?php echo $row['g_id']; ?>" title=""><?php echo $row['date']; ?></a></small>
                                                  
                                                  <small><a href="gadget-single.php?g_id=<?php echo $row['g_id']; ?>" title=""><i class="fa fa-eye"></i> <?php echo $row['views']; ?></a></small>
                                              </div><!-- end meta -->
                                              <hr class="invis">
                                          </div><!-- end blog-box -->
                                      </div><!-- end col -->
                                      
                                     
                                      <?php
                          } }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }
                        // show pagination                      
                        $sql1 = "SELECT * FROM `gadget` WHERE `gadget`.name LIKE '%{$search_term}%' OR `gadget`.specifications LIKE '%{$search_term}%'";
                        $result1 = mysqli_query($con, $sql1) or die("Query Failed.");
                        if(mysqli_num_rows($result1) > 0)
                        {
                          $total_records = mysqli_num_rows($result1);
                          $total_page = ceil($total_records / $limit);
                          echo '<ul class="pagination justify-content-start">';
                          if($page > 1){
                            echo '<li><a class="page-link" href="search gadget.php?page='.($page - 1).'">Prev</a></li>';
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
                              echo '<li class=""><a class="'.$active.'" href="search gadget.php?page='.$i.'">'.$i.'</a></li>';
                          }
                          if($total_page > $page){
                            echo '<li ><a class="page-link" href="search gadget.php?page='.($page + 1).'">Next</a></li>';
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