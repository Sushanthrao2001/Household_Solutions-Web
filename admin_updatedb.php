<!--The php code used to update the data given in text fields to the database-->
<?php
     $con =mysqli_connect('localhost','root','Sushanth.6295');
     if(!$con){
          echo 'Not Connected to the server';
        }
    if(!mysqli_select_db($con,'household solutions')){
        echo 'Data base not selected';
       }
        $i=$_GET['i'];
        $d=$_POST['district'];
        $o=$_POST['occupation'];
        $l=$_POST['location'];
        $n=$_POST['fullname'];
        $mob=$_POST['mobile'];
        $em=$_POST['email'];
        $a=$_POST['address'];
        $e=$_POST['experience'];

        $query="UPDATE employee_details SET District='$d',Occupation='$o',Location_of_Service='$l',Name='$n',Email_id='$em',Mobile_Number='$mob',Address='$a',Experience='$e' where Id='$i' ";
        $data=mysqli_query($con,$query);
        if($data){
            echo'<script>alert("Record Updated")</script> ';
            header("refresh:0;url=admin_view_emp.php");
        }else{
            echo'<script>alert("Failed to update")</script> ';
        }
 
?> 