<?php
include 'dbconnect.php';
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="DELETE FROM contacts
                WHERE id=$id";
        $query_result=mysqli_query($connect,$query);
        if($query_result){
            echo "Contact Successfully Deleted";
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

    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />
</head>
<body>

    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="view_contacts.php" class="text-light">Return to Contacts</a>
        </button>

    </div>

</body>
</html>