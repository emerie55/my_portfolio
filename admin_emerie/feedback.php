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
      <title>Admin Portal::Feedback</title>
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
      
      <!-- FOR CK EDITOR -->
      <!-- <link href="css/sample.css" rel="stylesheet">
      <script src="js/ckeditor.js"></script> -->
                  
      									   
    </head>
<body style="">


<!-- SIDEBAR -->
<?php include "connect/head.php"; ?>
<!-- END OF SIDEBAR -->


<div class="content">
  
 <div class="row topcontent ">
 <h2 style="margin-left:10px;"><span class="icofont-comment"></span> Feedbacks</h2><br>

  <div class="row">
    <div class="col-md-1">
      
    </div>

    <div class="col-md-9" style="overflow-x:auto;">

<div class="panel panel-success">
      <div class="panel-heading"><b> <span class="icofont-check"></span> Feedbacks</b></div>
      <div class="panel-body">
        
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    
    <thead>
       <tr>
       
       <th>Name</th> 
       <th>Email</th>
       <th>Subject</th>
       <th>Message</th>
       <th>Date</th>
       <th>Delete</th>            
   </tr>
</thead>
<tbody>
<!-- php here -->
    <?php
          
           $mysqli1="select * from con_tact order by id desc ";
    $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
    while($row2 = mysqli_fetch_object($myquery1))
  {
      

   ?>
   <tr>    
                  <td><?php echo $row2->fullname; ?></td>
                  <td>
                    <a href="mailto:<?php echo $row2->email; ?>" target="_blank">
                      <?php echo $row2->email; ?>
                    </a>
                  </td>
                  <td><?php echo $row2->subject; ?></td>
                  <td>
                    <?php echo $row2->message; ?>
                  </td>
                  <td><?php echo $row2->date; ?></td>
                  <td>  
                    <a href="deletefb.php?id=<?php echo $row2->id; ?>" onclick="return confirm('Are you sure you want to delete?')" title="delete Feedback"><span class="icofont-bin h3"></span></a>
                  </td>
                  
                  
                </tr>
               <?php  } ?>

      </tbody>
    </table>
    <!-- two div below is the close the box -->
 </div>
    </div>
      
    </div>
    
  </div>
  
 
</div>


</div>
    
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

      <script src="../dataTables/jquery.dataTables.js"></script>
      <script src="../dataTables/dataTables.bootstrap.js"></script>
          <script>
              $(document).ready(function () {
                  $('#dataTables-example').dataTable();
              });

                  // ClassicEditor
                  // .create( document.querySelector('#editor'))
                  // .then( editor => {
                  //   console.log( editor);
                    
                  // })
                  // .catch( error => {
                  //   console.error(error);
                    
                  // });
      </script>

		
	</body>
	</html>																							   
																								   