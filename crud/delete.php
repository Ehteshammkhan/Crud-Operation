<?php
include('connection.php');

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    // echo $id;

    $sql = "delete from `crud` where id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Deleted Sucessfully";
        header('location:display.php');
        exit();
    } else {
        die(mysqli_error($conn));
    }
}
?>