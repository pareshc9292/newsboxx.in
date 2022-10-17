<?php require_once "include/header.php"?>
<?php require_once "include/db.php" ?>
<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                       <div class="page-wrapper">
                            <div class="blog-top clearfix">
                            <?php if(isset($_GET['search'])){
                    $search_term = mysqli_real_escape_string($con, $_GET['search']);
                        ?>
                                <h4 class="pull-left">Search : <?php echo $search_term;  ?></h4>
                            </div><!-- end blog-top -->
                            <?php
                       
                  
                        /* Calculate Offset Code */
                        $limit = 8;
                        if(isset($_GET['page']))
                          {
                            $page = $_GET['page'];
                          }else
                          {
                            $page = 1;
                          }
                        $offset = ($page - 1) * $limit;
                       
                        $sql = "SELECT post.post_id,post.image, post.heading, post.news,post.date,post.author,
                    post.tag,post.views FROM post
                    WHERE post.heading LIKE '%{$search_term}%' OR post.news LIKE '%{$search_term}%'
                    ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
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
                                        <p><?php echo substr($row['news'],0,140) . "..."; ?> </p>
                                        <small class="firstsmall"><a class="bg-orange" href="category-01.html" title=""><?php echo $row['tag']; ?></a></small>
                                        <small><a href="single.php" title=""><?php echo $row['date']; ?></a></small>
                                        <small><a href="author.html" title=""><?php echo $row['author']; ?></a></small>
                                        <small><a href="single.php" title=""><i class="fa fa-eye"></i><?php echo $row['views']; ?></a></small>
                                        <hr class="invis">
                                    </div>
                                </div>
                             </div>
                             <hr class="invis">

                     <?php
                          
                        }
                      }
                        }else{
                          echo "<h2> Post Not Found.</h2>";
                        }
                        // show pagination                      
                        $sql1 = "SELECT * FROM post
                                 WHERE post.heading LIKE '%{$search_term}%'";
                        $result1 = mysqli_query($con, $sql1) or die("Query Failed.");
                        if(mysqli_num_rows($result1) > 0)
                        {
                          $total_records = mysqli_num_rows($result1);
                          $total_page = ceil($total_records / $limit);
                          echo '<ul class="pagination justify-content-start">';
                          if($page > 1){
                            echo '<li><a class="page-link" href="search.php?search='.$search_term.'&page='.($page - 1).'">Prev</a></li>';
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
                              echo '<li class=""><a class="'.$active.'" href="search.php?search='.$search_term.'&page='.$i.'">'.$i.'</a></li>';
                          }
                          if($total_page > $page){
                            echo '<li ><a class="page-link" href="search.php?search='.$search_term.'&page='.($page + 1).'">Next</a></li>';
                          }
                          echo '</ul>';
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
            <?php include "include/sidebar.php"?>
            <?php include "include/footer.php" ?>
                    