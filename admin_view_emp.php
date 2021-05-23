<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.jpg">
    <style>
      .table{
        width: 90%;
        margin-left:80px;
        margin-top:140px;
        border: 1px solid black;
      }
    </style> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="home.php">
         <img src="images/logo1.jpg" width="50" height="50" alt="Logo not found">
       </a>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="home.php">Household Solutions</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link" href="admin_panel.html">Add an employee</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin_view_emp.php">View Employees</a>
          </li>
        </ul>
        </div>
    </nav>
    <table class="table " >
     <thead class=" thead-dark">
         <tr>
         <th scope="col">Id</th>
             <th scope="col">District</th>
             <th scope="col">Occupation</th>
             <th scope="col">Location Of Service</th>
             <th scope="col">Name</th>
             <th scope="col">Mobile</th>
             <th scope="col">Email Id</th>
             <th scope="col">Address</th>
             <th scope="col">Experience</th>
             <th scope="col" >Operations</th>
           </tr>
       </thead>
       <tbody>
       <?php
            $con=mysqli_connect('localhost','root','Sushanth.6295');
     
            mysqli_select_db($con,'household solutions');
            $query= $query=" select * from employee_details ";
            $result=mysqli_query($con,$query);

            while($row= mysqli_fetch_array($result)){
                ?>
  
                 <tr>
                   <td><?php echo $row['Id']; ?></td>
                   <td><?php echo $row['District']; ?></td>
                   <td><?php echo $row['Occupation']; ?></td>
                   <td><?php echo $row['Location_of_Service']; ?></td>
                   <td><?php echo $row['Name']; ?></td>
                   <td><?php echo $row['Mobile_Number']; ?></td>
                   <td><?php echo $row['Email_id']; ?></td>
                   <td><?php echo $row['Address']; ?></td>
                   <td><?php echo $row['Experience']; ?></td>
                   <td>
                       <a href="admin_update.php?&i=<?php echo $row['Id']; ?>&d=<?php echo $row['District']; ?>&o=<?php echo $row['Occupation']; ?>&l=<?php echo $row['Location_of_Service']; ?>&n=<?php echo $row['Name']; ?>&mob=<?php echo $row['Mobile_Number']; ?>&em=<?php echo $row['Email_id']; ?>&a=<?php echo $row['Address']; ?>&e=<?php echo $row['Experience']; ?>"><button class="btn btn-outline-success my-2 my-sm-0">Update</button></a>
                       <a href="admin_delete.php?&i=<?php echo $row['Id']; ?>"  > <button class="btn btn-outline-danger my-2 my-sm-0"  >Delete</button></a>
                   </td>
                   </tr>
              <?php
            }
          ?>
       </tbody>
   </table>
   <!-- <script>
        function myFunction(){
          var r = confirm("Are you sure you want to delete this record?");
          if(r==true){
            return true;
          }else{
            return false;
          }
        }
    </script> -->
</body>
</html>