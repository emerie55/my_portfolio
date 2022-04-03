<div class="sidebar">
  <section class="s_logs">
    <img src="../assets/img/emerie.jpg" alt="" style="width:200px; height:230px; border-radius:200px; "  class="img img-responsive">
    
    <center>
        <span style="font-size:1.6rem; color:#fff;"><?php echo $name; ?></span>
    </center>
  
  </section>
  <a href="index.php"><span class="icofont-home"></span> Dashboard </a>
  <!-- <a href="submitted.php"><span class="glyphicon glyphicon-check"></span> Complain / Questions </a> -->
  <a href="info.php"><span class="icofont-library"></span> Portfolio </a>
  <!-- <a href="stud.php"><span class="fa fa-users"></span> Registered Students </a> -->
  <a href="feedback.php"><span class="icofont-comment"></span> Feedback </a>
  <a href="visitor.php"><span class="icofont-eye-alt"></span> Visitor </a>
  
  <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')"><span class="icofont-logout"></span> Logout</a>

</div>

<!--  MOBILE SIDEBAR -->
<div class="smobs">
  
    <section class="s_logs">
        <!-- <img src="../img/fed.PNG" class="img img-responsive"><br> -->
        <img src="../assets/img/emerie.jpg" alt="" style="width:100px; height:100px; border-radius:200px; "  class="img img-responsive">

        
    </section>  

  <div class="navimg" id="navhide">
    <span class="icofont-navigation-menu" id="naviconhide"></span>
    <span class="icofont-close" id="naviconshow" style=""></span>
  </div>  
  
  <ul class="" id="navshows">
  <br><br>
  <a class="smoblinks"  href="index.php"><li><span class="icofont-home"></span> Dashboard </li></a>

  
  <!-- <a href="submitted.php" class="smoblinks"><li><span class="glyphicon glyphicon-check"></span> Complain / Questions </li></a> -->
  
  <a href="info.php" class="smoblinks"><li><span class="icofont-library"></span> Portfolio </li></a>
  <!-- <a href="stud.php" class="smoblinks"><li><span class="fa fa-users"></span> Registered Students </li></a> -->
  
  <a href="feedback.php" class="smoblinks"><li><span class="icofont-comment"></span> Feedback </li></a>
  <a href="visitor.php" class="smoblinks"><li><span class="icofont-eye-alt"></span> Visitor </li></a>

  
  <a href="logout.php" class="smoblinks" onclick="return confirm('Are you sure you want to logout?')"><li><span class="icofont-sign-out"></span> Logout </li></a>
  </ul>
</div>
<!-- END SIDEBAR -->
