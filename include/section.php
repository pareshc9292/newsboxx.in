
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                       <div class="page-wrapper">
                       <script type="text/javascript" language="javascript">
      var aax_size='728x90';
      var aax_pubname = 'newsboxx-21';
      var aax_src='302';
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-newspaper-o " style="color:orange"></i></a></h4>
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

                        $sql = "SELECT * FROM post ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
                        $sql = mysqli_real_escape_string($con,$sql);
                        $result = mysqli_query($con, $sql) or die("Query Failed.");
                        
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                              
                             <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="single.php?id=<?php echo $row['post_id']; ?>" title="">
                                                <img src="img/home/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="single.php?id=<?php echo $row['post_id']; ?>" title=""><?php echo substr($row['heading'],0,95) . "..."; ?></a></h4>
                                        <p><?php echo substr($row['news'],0,130) . "..."; ?> </p>
                                        <small class="firstsmall"><a class="bg-orange" href="category-01.html" title=""><?php echo $row['category']; ?></a></small>
                                        <small><a href="single.php?id=<?php echo $row['post_id']; ?>" title=""><?php echo $row['date']; ?></a></small>
                                        <small><a href="author.html" title=""><?php echo $row['author']; ?></a></small>
                                        <small><a href="single.php?id=<?php echo $row['post_id']; ?>" title=""><i class="fa fa-eye"></i> <?php echo $row['views']; ?></a></small>
                                       
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
                        $sql1 = "SELECT * FROM post";
                        $sql1 = mysqli_real_escape_string($con,$sql1);
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
                            echo '<li><a class="page-link" href="tech-index.php?page='.($page - 1).'">Prev</a></li>';
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
                              echo '<li class=""><a class="'.$active.'" href="tech-index.php?page='.$i.'">'.$i.'</a></li>';
                          }
                          if($total_page > $page){
                            echo '<li ><a class="page-link" href="tech-index.php?page='.($page + 1).'">Next</a></li>';
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
                    