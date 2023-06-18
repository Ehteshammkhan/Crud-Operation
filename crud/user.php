<?php
include('connection.php');
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("location:display.php");
    exit();
  } else {
    die(mysqli_error($conn));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form method="post" class="my-5">
      <h1 class="text-center mb-5">Enter Your Details</h1>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="mobile" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
          autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>