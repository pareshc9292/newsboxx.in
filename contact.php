<?php

$con = mysqli_connect("localhost","newsboxx_Paresh","Pareshc@10","newsboxx_newsboxx","3306");
$send = "";
if($con){
   $send = "Successfully Submited";
}
    else{
       $send = "Server Not Found Plz try later";
    }
  
    mysqli_select_db($con,'newsboxx');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $subject = $_POST['subject' ];
    $message = $_POST['message' ];

    $query= "insert into contact(name,email,phone_no,subject,message)
    values('$name','$email','$phone_no','$subject','$message') ";


    mysqli_query($con,$query);

?>

<?php require_once "include/header.php";
      
?>
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-open-o bg-orange"></i> Email <small class="hidden-xs-down hidden-sm-down"><?php echo $send ?></small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="tech-index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="tech-contact.php">Back</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                        
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

       <br>
       
       <br>
       <br>
       <br>

<?php require_once "include/footer.php" ?>