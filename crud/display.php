<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operaton</th>
                </tr>
            </thead>
            <?php
            $sql = "select * from `crud`";
            $result = mysqli_query($conn, $sql);
            // var_dump($result);
            // print_r($result);
            $sno = 0;
            if ($result) {
                // $row = mysqli_fetch_assoc($result);
                // $id = $row['id'];
                // echo "$id";
                // echo $row['email'];
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    // echo $id;
                    $sno = $sno + 1;
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $sno; ?>
                        </th>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['mobile']; ?>
                        </td>
                        <td>
                            <?php echo $row['password']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?updateid=<?php echo $id; ?>"
                                    class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid=<?php echo $id; ?>"
                                    class="text-light">Delete</a></button>
                        </td>
                    </tr>
                <?php }
            }
            ?>
        </table>
    </div>
</body>

</html>