<script>
   function create(){
     return Confirm('Are you sure you want to delete this record');
   }
   </script>

<?php
     $con =mysqli_connect('localhost','root','Sushanth.6295');
     if(!$con){
          echo 'Not Connected to the server';
        }
     if(!mysqli_select_db($con,'household solutions')){
        echo 'Data base not selected';
       }
        $i=$_GET['i'];
        $query=" Delete from employee_details where Id='$i' ";
        $data=mysqli_query($con,$query);

        if($data){
            echo '<script>alert("Record Deleted Succesfully")</script>';
            header("refresh:0;url=admin_view_emp.php");
        }
        else{
            echo '<script>alert("Failed to delete the record!!")</script>';
            header("refresh:0;url=admin_view_emp.php");
        }
?>