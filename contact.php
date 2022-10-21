<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $organization=$_POST['organization'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $query="insert into contacts (first_name,last_name,organization,email,phone)
            values('$first_name','$last_name','$organization','$email','$phone')";
    $result=mysqli_query($connect,$query);

    if($result){
        header('location:index.php');
    }
    else{
        die(mysqli_error($connect));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <title>Add Contact</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />
  </head>
    <h1>Add Contact</h1>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" />
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" />
            </div>
            <div class="form-group">
                <label>Organization</label>
                <input type="text" class="form-control" placeholder="Enter Organization" name="organization">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

  </body>
</html>
