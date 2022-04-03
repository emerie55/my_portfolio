<?php
    
    // Include the server configuration
    include "connect.php";

    $ip = $_SERVER['SERVER_ADDR'];
    $device = $_SERVER['HTTP_USER_AGENT'];

    $visit_exist = $con->query("SELECT * FROM tbl_visitor WHERE user_ip='$ip'");
    
    if($visit_exist->num_rows > 0){
    
        $today = date('d/m/Y');
        $exists = false;
        while ($vists = $visit_exist->fetch_array()) {
            $saved_date = date( 'd/m/Y', strtotime($vists['date_visited']));
            if($saved_date == $today){
                $exists = true;
            }
        }
        
        if ($exists == false) {
            $insert_visit = mysqli_query($con,"INSERT INTO tbl_visitor(user_ip, device) VALUES('$ip','$device')")or die(mysqli_error($con));
        }
    }else{
        $insert_visit = mysqli_query($con,"INSERT INTO tbl_visitor(user_ip, device) VALUES('$ip','$device')")or die(mysqli_error($con));;
    }
    
?>