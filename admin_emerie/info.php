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
      <title>Admin Portal::portfolio</title>
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
 <h2 style="margin-left:10px;"><span class="icofont-library"></span> Portfolio</h2><br>

    <div class="col-md-2"></div>
    <div class="col-md-6">
     <br><br>
     <div class="panel panel-primary">
      <div class="panel-heading"><b> <span class="icofont-plus"></span> Add a Portfolio</b></div>
      <div class="panel-body">
<?php

if(isset($_POST["sub"])){

  function test_input($data) {
         $data = trim($data);
       $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;
}


      $title=test_input($_POST["title"]);
      $client=test_input($_POST["client"]);
      $prodate=test_input($_POST["prodate"]);
      $prourl=test_input($_POST["prourl"]);
      $info=test_input($_POST["info"]);
      
      $filename=$_FILES["vide"]["name"];
      $templocale=$_FILES["vide"]["tmp_name"];
      $_FILES["vide"]["type"];
      $_FILES["vide"]["size"];
      
      $folderpath="pdf/".$filename;
      // . time()
    //   $check2=mysqli_query($con,"select * from info where pic = '".mysqli_real_escape_string($con,$folderpath)."' ");
    //   $row2=mysqli_num_rows($check2);

    //   if($row2 > 0){
    //     echo"<script>alert('There is a similar Image.. Do change it')</script>";
    //  }
     
    //  else{
      move_uploaded_file($templocale,$folderpath);
      $senddata2 = mysqli_query($con,"insert into port_folio (title,client,prodate,prourl,info,propic) values
    ('".mysqli_real_escape_string($con,$title)."','".mysqli_real_escape_string($con,$client)."','".mysqli_real_escape_string($con,$prodate)."','".mysqli_real_escape_string($con,$prourl)."','".mysqli_real_escape_string($con,$info)."','".mysqli_real_escape_string($con,$folderpath)."')")or die(mysqli_error($con)); 
    //  }

    if(@$senddata2){
        
    echo "<script>alert('$title added successfully!');</script>
    ";

  }else{
    echo"<script>alert('Error in adding $title')</script>";
  }

}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
<div class="form-group">  
<input type="text" name="title" class="form-control" placeholder="Enter title" required> 
</div>

<div class="form-group">
  <label for="Upload file">Chose Image</label>
  <input type="file" class="form-control" accept="pdf/*" name="vide" >
</div>

<div class="form-group">  
<input type="text" name="client" class="form-control" placeholder="Enter client" required> 
</div>

<div class="form-group">  
<label for="Project date">Project date</label>
<input type="date" name="prodate" class="form-control" placeholder="Project date" required> 
</div>

<div class="form-group">  
<input type="text" name="prourl" class="form-control" placeholder="Project URL" required> 
</div>


          
<div class="form-group">
  <textarea class="form-control" name="info" id="editor" placeholder="more information..."  
  style="resize:none;"></textarea>
</div>

<button class="btn btn-primary" name="sub"><b><i class="icofont-plus"></i> Add</b></button>
</form>

      </div>
    </div>
    </div>
    
  </div>


  <div class="row">
    <div class="col-md-1">
      
    </div>

    <div class="col-md-9" style="overflow-x:auto;">

<div class="panel panel-success">
      <div class="panel-heading"><b> <span class="icofont-check"></span> Added Portfolio</b></div>
      <div class="panel-body">
        
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    
    <thead>
       <tr>
       
       <th>Title</th> 
       <th>Image</th>
       <th>Client</th>
       <th>Project date</th>
       <th>Project URL</th>
       <th>Information</th>
       <th>Delete</th>            
   </tr>
</thead>
<tbody>
<!-- php here -->
    <?php
          
           $mysqli1="select * from port_folio ";
    $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
    while($row2 = mysqli_fetch_object($myquery1))
  {
      

   ?>
   <tr>    
                  <td><?php echo $row2->title; ?></td>
                  <td>    
                    <center>
                      <?php
                      if($row2->propic == "pdf/"){
                        echo "<span class='' style='font-size:15px; font-weight:bold; cursor: not-allowed;'>No Image</span>";
                        
                      }else{
                        echo "<a href='$row2->propic' target='_blank'>";
                        echo "<span class='icofont-image' style='font-size:40px;'></span>";
                      }
                      ?>
                    </center>
                  </td>
                  <td><?php echo $row2->client; ?></td>
                  <td><?php echo $row2->prodate; ?></td>
                  <td>
                    <a href="https://<?php echo $row2->prourl; ?>" target="_blank">
                      <span class="icofont-dashboard-web h1"></span>
                    </a>
                  </td>
                  <td><?php echo $row2->info; ?></td>
                  <td>  
                    <a href="deleteinfo.php?id=<?php echo $row2->id; ?>" onclick="return confirm('Are you sure you want to delete?')" title="delete Information"><span class="icofont-bin h3"></span></a>
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

                  ClassicEditor
                  .create( document.querySelector('#editor'))
                  .then( editor => {
                    console.log( editor);
                    
                  })
                  .catch( error => {
                    console.error(error);
                    
                  });
      </script>

		
	</body>
	</html>																							   
																								   