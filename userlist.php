<?php
require_once "User.php";

//create an object for user
$user = new User;

//call the method to get all the users from the table
$get_all_user = $user->getAllUser();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>User List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Birthdate</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    if($get_all_user == false) {
                                        echo "<tr><td colspan='6' class='text-center'>No Users</td></tr>";
                                    } else {
                                        foreach($get_all_user as $key => $row) {
                                            $user_id = $row['user_id'];

                                            $birthdate = strtotime($row['birthdate']);
                                            $new_birthdate = date("M d, Y", $birthdate);
                                            
                                            $date_created = strtotime($row['date_created']);
                                            $new_date_created = date("M d, Y h:i:s a", $date_created);
                                            echo "<tr>";
                                            echo "<td>". $row['user_id'] ."</td>";
                                            echo "<td>". $row['username'] ."</td>";
                                            echo "<td>". $row['firstname'] ."</td>";
                                            echo "<td>". $row['lastname'] ."</td>";
                                            echo "<td>$new_birthdate</td>";
                                            echo "<td>$new_date_created</td>";
                                            echo "<td><a href='editUser.php?user_id=$user_id' class='btn btn-info'>Edit</a>
                                            <a href='deleteUser.php?user_id=$user_id' class='btn btn-danger'>Delete</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>