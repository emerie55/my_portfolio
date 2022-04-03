<?php
session_start();
include "connect.php";
?>
<!DOCTYPE HTML>

<head>
    <title>Admin Account</title>

    <link rel="icon" href="img/ginger-star.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="edit.css" rel="stylesheet" media="screen">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
															   
</head>


  <script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
    $("#naviconshow").show(10);
    $("#naviconhide").hide();	  
  } else {
    x.type = "password";
    $("#naviconhide").show(10);
    $("#naviconshow").hide();	  
  }
} 
  </script>



<body style="background: linear-gradient(0deg, #444 -50%, #33364a 100%);">

	
<div class="me">

<center>
  <h3 id="h3"><a href="index.php" class="" style="color:#ef6603;">Admin Portal</a></h3><br>
  <div class="container ">
  <p class="text">
  <a href="#" data-toggle="modal" data-target="#myModal" >Login</a>
  </p>
  </div>
</center>
    

<!-- Modal login -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background:#ef6603;">
          <!-- <span class="close" data-dismiss="modal">&times;</span> -->
          <h4 class="modal-title" style="color:#fff;">Admin Login</h4>
        </div>
        <div class="modal-body">

<?php
             
    if (isset($_POST['log'])){
                
            function test_input($data) {
         $data = trim($data);
       $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;
}
//exploit ends

                $user = test_input($_POST['user'])or die('please enter a valid username');
                $password = test_input($_POST['pass'])or die('please enter a valid password');
                $query1 = "select * from i_emerie where  password='".mysqli_real_escape_string($con,$password)."' AND username='".mysqli_real_escape_string($con,$user)."' ";
                $result1 = mysqli_query($con,$query1)or die(mysqli_error($con));
                                $row = mysqli_fetch_array($result1);
                $num_row = mysqli_num_rows($result1);
                  
                  if( $num_row > 0 ) {
                    
                   $_SESSION['passiw']=$row['password'];
                    
                    $_SESSION['name']=$row['fullname'];                                         
                                    

                    echo "<script> location.replace('admin_emerie/')</script>";
                    
                  }
                  else{ 
                echo "<script>alert('Invalid username or Password!')</script>";
                echo "<p style='color:red;'>Are You Sure you have an account?!</p>";
                }    //form validation to avoid exploit

                }            
    ?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

  <div class=" form">
    <input type="text" name="user" class="w3-input" required="required">
    <label class="label-name" for="Username">
    <span class="content-name"><i class="fa fa-user"></i> Username</span>
    </label>
  </div>

  <div class=" form">
    <input type="password" name="pass" class="w3-input" required="required">
    <label class="label-name" for="Password">
    <span class="content-name"><i class="fa fa-lock"></i> Password</span>
    </label>
    
  </div><br>
   
   <button name="log" class="btn btn-primary "><b><i  class="icofont-login"></i> Login</b></button>
   </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>








<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>









	</body>
	</html>																							   
																								   