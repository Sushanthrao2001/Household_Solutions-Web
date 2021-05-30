<?php

$con=mysqli_connect('localhost','root','Sushanth.6295');
     
mysqli_select_db($con,'household solutions');

  if ($_GET['u']) 
  { 
    $u=$_GET['u'];

    $query=" select * from users_data where Email_id='$u'";
    $data=mysqli_query($con,$query);
    if($data){
      while($row= mysqli_fetch_array($data)){
        $n=$row['Name'];
      }
    }
  }else{
    echo '<script>alert("You are not logged in!! Directing you to login page")</script>';
    header("refresh:0;url=login.html");
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Solutions</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.jpg">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <style>
      .search{
       width: 40%;
       margin-top: 45px;
       margin-left: 445px;
      }
      .table{
        width: 80%;
        margin-left:150px;
        border: 2px solid black;
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
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>
    </ul>
    <h4 style="padding-top:5px; padding-right:17px"><?php echo'Welcome '.$n.','?></h4>
    <a href="login.html" class="btn btn-outline-danger my-2 my-sm-0" role="button">Log out</a>
    <a href="admin_login.html" class="btn btn-outline-success my-2 my-sm-0" role="button">Admin</a>
    </div>
</nav>
 <img src="Backgrounds/sidekix-media-zLT3VqWEgOQ-unsplash.jpg" width="1527px" height="450px" style="object-fit: cover"></img>

 <h2 style="margin-left: 550px; margin-top: 25px;">What service did you want?</h2>

 <form class="search" method="POST">
    <input class="form-control mr-sm-2" type="search" name="occupation" placeholder="Type to search.." aria-label="Search">
    <button class="btn btn-outline-success my-7 my-sm-5" type="submit" style="margin-left: 217px; width: 25%;">Search</button>
 </form>
  <table class="table" >
     <thead class=" thead-dark">
         <tr>
             <th scope="col">District</th>
             <th scope="col">Occupation</th>
             <th scope="col">Location Of Service</th>
             <th scope="col">Name</th>
             <th scope="col">Mobile</th>
             <th scope="col">Email Id</th>
             <th scope="col">Experience</th>
           </tr>
       </thead>
       <tbody>
       <?php
           
            if(isset($_POST['occupation']))
             {

              $id=$_POST['occupation'];
              $query= $query=" select * from employee_details where Occupation='$id' ";
              $result=mysqli_query($con,$query);
              if($result){
                while($row= mysqli_fetch_array($result)){
                  ?>
    
                   <tr>
                     <td><?php echo $row['District']; ?></td>
                     <td><?php echo $row['Occupation']; ?></td>
                     <td><?php echo $row['Location_of_Service']; ?></td>
                     <td><?php echo $row['Name']; ?></td>
                     <td><?php echo $row['Mobile_Number']; ?></td>
                     <td><?php echo $row['Email_id']; ?></td>
                     <td><?php echo $row['Experience']; ?></td>
                     </tr>
               
               <?php
                 }

              }
               else{
                echo '<script>No Data Found on your keyword!</script>';
               }
            }
          ?>
       </tbody>
   </table>
 </body>
</html> 
