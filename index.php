<?php
include 'dbconnect.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" />
</head>
<h1>Contacts</h1>
<body>

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query="Select * From contacts";
                $query_result=mysqli_query($connect,$query);
                if($query_result){
                    while($all=mysqli_fetch_assoc($query_result)){
                        $id=$all['id'];
                        $first_name=$all['first_name'];
                        $last_name=$all['last_name'];
                        $organization=$all['organization'];
                        $email=$all['email'];
                        $phone=$all['phone'];
                        echo '<tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$first_name.'</td>
                                    <td>'.$last_name.'</td>
                                    <td>'.$organization.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$phone.'</td>
                                    <td>
                                        <button class="btn btn-link">
                                            <a href="contact_update.php?update='.$id.'">Edit</a>
                                        </button>
                                        <button class="btn btn-link">
                                            <a href="contact_delete.php?delete='.$id.'" class="text-danger">Delete</a>
                                        </button>
                                    </td>
                                </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
        <button class="btn btn-primary my-5">
            <a href="contact.php" class="text-light">Add Contact</a>

        </button>

    </div>

</body>
</html>
