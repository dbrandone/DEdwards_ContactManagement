<?php
include 'dbconnect.php';

$id=$_GET['update'];
$query="SELECT * FROM contacts
        WHERE id=$id";
$query_result=mysqli_query($connect,$query);
$contact=mysqli_fetch_assoc($query_result);
$name=$contact['name'];
$organization=$contact['organization'];
$email=$contact['email'];
$phone=$contact['phone'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $organization=$_POST['organization'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $query="UPDATE contacts 
            SET id=$id,name='$name',organization='$organization',email='$email',phone='$phone'
            WHERE id=$id";
    $result=mysqli_query($connect,$query);

    if($result){
        header('location:view_contacts.php');
    }
    else{
        die(mysqli_error($connect));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Add Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />
</head>
<h1>Modify Contact</h1>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Contact Name" name="name" value=<?php echo $name; ?> />
            </div>
            <div class="form-group">
                <label>Organization</label>
                <input type="text" class="form-control" placeholder="Enter Organization" name="organization" value=<?php echo $organization; ?> />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" value=<?php echo $email; ?> />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" value=<?php echo $phone; ?> />
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>
</html>