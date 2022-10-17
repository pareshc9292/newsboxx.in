<?php require_once "include/header.php";
      
?>
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-open-o bg-orange"></i> Contact us <small class="hidden-xs-down hidden-sm-down">Newsboxx.in </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="tech-index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h4>Who we are?</h4>
                                    <p>Newsboxx.in is a personal blog for Technews, Latest updates  & The blogs are improve your Technical Knowledge.</p>
                   
                                    <h4>How we help?</h4>
                                    <p>We will post daily blog to improve your Technical Knowledge and tells peoples latest Technews in very short,help you to save your time,Not like news channels. </p>
             
                                    <h4>Why you should use our website?</h4>
                                    <p>We serve news digitally,In the world of digital Era it's very important to updates toward's the Technology.  </p>
                                </div>
                                <div class="col-lg-7">
                                
                                    <form class="form-wrapper" action="contact.php" method="post">
                                        <input type="text" class="form-control" name="name" placeholder="Your name">
                                        <input type="text" class="form-control" name="email" placeholder="Email address">
                                        <input type="text" class="form-control" name="phone_no" placeholder="Phone">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                        <textarea class="form-control" name="message" placeholder="Your message"></textarea>
                                        <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
                                    </form>

                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

<?php require_once "include/footer.php" ?>