<?php
 
  $con= mysqli_connect('localhost','root','Sushanth.6295');

  mysqli_select_db($con,'household solutions');

  $Id=$_POST['Id'];
  $district=$_POST['district'];
  $occupaion=$_POST['occupation'];
  $name=$_POST['fullname'];
  $emailid=$_POST['email'];
  $mobile=$_POST['mobile'];
  $location=$_POST['location'];
  $address=$_POST['address'];
  $exp=$_POST['experience'];

  $s=" select * from employee_details where Name='$name' and Occupation='$occupaion' and Email_id='$emailid' ";

  $result=mysqli_query($con,$s);

  $num=mysqli_num_rows($result);

  if($num==1){
      echo '<script> alert("Employee already registered!!")</script>';
      header("refresh:0;url=admin_panel.html");
  }else{
         $reg="insert into employee_details(Id,District,Occupation,Location_of_Service,Name,Email_id,Mobile_Number,Address,Experience)
            values('$Id','$district','$occupaion','$location','$name','$emailid','$mobile','$address','$exp') ";
        mysqli_query($con,$reg);
        echo'<script>alert("Employee Registered Succesfully")</script>'; 
        header("refresh:0;url=admin_panel.html");
    }

?>