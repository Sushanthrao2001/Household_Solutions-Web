<?php

$con=mysqli_connect('localhost','root','Sushanth.6295');
if(!$con){
    echo 'Not Connected to the server';
}
if(!mysqli_select_db($con,'household solutions')){
    echo 'Data base not selected';
}
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message']; 

$s="select * from contactus_form where Feedback='$message'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if($num==1){
     echo '<script>alert("Feedback message is same!!")</script>';
     header("refresh:0;url=contactus.html");
}else{
    $reg=" insert into contactus_form(Name,Email_id,Mobile_Number,Feedback) values ('$name','$email','$mobile','$message')";
    mysqli_query($con,$reg);
    echo '<script>alert("Feedback Saved!")</script>';
    header("refresh:0;url=contactus.html");
}

?>