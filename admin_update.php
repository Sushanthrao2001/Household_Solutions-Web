<!--The php code used when update button is clicked in employee details page in admin page -->
<?php
 $con =mysqli_connect('localhost','root','Sushanth.6295');
 if(!$con){
     echo 'Not Connected to the server';
 }
 $i=$_GET['i'];
 $d=$_GET['d'];
 $o=$_GET['o'];
 $l=$_GET['l'];
 $n=$_GET['n'];
 $mob=$_GET['mob'];
 $em=$_GET['em'];
 $a=$_GET['a'];
 $e=$_GET['e'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.jpg">
    <style>
        .login-mid{
            margin-left: 250px;
            float: none;
            margin-bottom:37px;
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
          <li class="nav-item">
            <a class="nav-link" href="admin_view_emp.php">View Employees</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin_update.php">Update Employee</a>
          </li>
        </ul>
        </div>
    </nav>
    <div class="container">

        <div class="login-box">
    
         <div class="row"> 
            <div class="col-md-6 login-mid">
                 <h2>Updating an Employee</h2>
                  <h5>&nbsp;</h5>
                  <form action="admin_updatedb.php?i=<?php echo $i; ?>" method="post" >
                     <div class="form-group" >
                         <label>District</label>
                         <input type="text" value="<?php echo $d ?>" name="district" class="form-control" required>
                     </div>
                     <div class="form-group" >
                        <label>Occupation</label>
                        <input type="text" value="<?php echo $o ?>" name="occupation" class="form-control" required>
                     </div>
                     <div class="form-group" >
                      <label>Location Of Service</label>
                      <input type="text" value="<?php echo $l ?>" name="location" class="form-control" required>
                     </div>
                     <div class="form-group" >
                        <label>Full Name</label>
                        <input type="text" value="<?php echo $n ?>" name="fullname" class="form-control" required>
                     </div>
                     <div class="form-group" >
                        <label>Email id</label>
                        <input type="email" value="<?php echo $em ?>" name="email" class="form-control" required>
                     </div>
                     <div class="form-group" >
                        <label>Mobile</label>
                        <input type="text" value="<?php echo $mob ?>" name="mobile" class="form-control" required>
                     </div>
                     <div class="form-group" >
                        <label>Address</label>
                        <input type="text" value="<?php echo $a ?>" name="address" class="form-control" required>
                     </div>
                     <div class="form-group" >
                        <label>Experience</label>
                        <input type="text" value="<?php echo $e ?>" name="experience" class="form-control" required>
                     </div>
                     <button type="submit" name="submit" class="btn btn-primary">Update data</button>
                    </form>
              </div>
            </div>
           
        </div>
    </div>
</body>
</html>
