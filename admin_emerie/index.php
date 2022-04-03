<?php
session_start();
include "session.php";
include"../connect.php";


if (!isset($_SESSION['passiw'])){
  header("location:../emerie.php");
  exit();
} 

?>
<!DOCTYPE HTML>

    <head>
      <title>Admin Portal</title>
      <link rel="icon" href="../img/ginger-star.png">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../edit.css" rel="stylesheet" media="screen">
      <link href="nav.css" rel="stylesheet" media="screen">
      <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
                            

      <!-- Vendor CSS Files -->
      <!-- <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
      <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
                          
      									   
    </head>
<body>

<!-- SIDEBAR -->
  <?php include "connect/head.php"; ?>
<!-- END OF SIDEBAR -->

<div class="content">
  
  <div class="row topcontent ">
  <h2><span class="fa fa-dashboard"></span> Admin Dashboard 
  </h2><br>

  <div class="col-md-3">
    <div class="panel panel-success d_b">
      <div class="panel-heading">Views </div>
      <div class="panel-body">
        <center><h1>
           <?php
          $mysqli1="select * from tbl_visitor ";
          $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
          $count=mysqli_num_rows($myquery1); echo $count;
        ?>
        </h1></center>

      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-success d_b">
      <div class="panel-heading">Portfolio </div>
      <div class="panel-body">
        <center><h1>
           <?php
          $mysqli1="select * from port_folio ";
          $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
          $count=mysqli_num_rows($myquery1); echo $count;
        ?>
        </h1></center>

      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-success d_b">
      <div class="panel-heading">Feed back </div>
      <div class="panel-body">
        <center><h1>
           <?php
          $mysqli1="select * from con_tact ";
          $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
          $count=mysqli_num_rows($myquery1); echo $count;
        ?>
        </h1></center>

      </div>
    </div>
  </div>
 
</div>


  <div class="row">
    <div class="col-md-6">
     
     <div class="panel panel-success" style="font-size:18px;">
      <div class="panel-heading" style="font-size:16px;"><b> <span class="fa fa-user"></span> Account Details</b></div>
      <div class="panel-body">
<p>
  <span class="icofont-calendar"></span> <?php echo date("d/M/Y") ?>
</p>
<p>
  <span class="icofont-history"></span> <?php echo date("h:i:sa") ?>
</p>
<p>
  Welcome, <b><?php echo $name; ?></b>
</p>

<!-- <p>
  <strong>Level:</strong> <?php //echo $lev; ?>
</p>
<p>
  <strong>Programme:</strong> <?php //echo $prog; ?>
</p>
<p>
  <strong>Semester:</strong> <?php //echo $sem; ?> -->
</p>


      </div>
    </div> 
    </div>


</div>

<script src="../dataTables/jquery.dataTables.js"></script>
    <script src="../dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>

    <script src="../js/myjs.js"></script>
      <!-- <script src="../jquery-3.2.1.min.js"></script>  -->
      <script src="../js/bootstrap.min.js"></script>
			

	</body>
	</html>																							   
																								   