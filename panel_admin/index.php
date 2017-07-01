<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Rental</title>


  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="asset/css/styles.css">


</head>

<body>
    <div class="wrapper">
    <form class="form-signin" action="index.php" method='post' enctype="multipart/form-data">
      <h2 class="form-signin-heading">Please login</h2>
      <input class="form-control"  name="user" type="text" placeholder="Username">
      <input class="form-control"  name="password" type="password" placeholder="Password">

      <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
  </div>

  <?php
                     if(isset($_POST['submit']))

                     {
                         if($_POST['user']=="rental" and $_POST['password']=="12")

                         {
                             echo "<script>window.location.href='index2.html';</script>";

                             exit;
                         }

                         else

                         {

                             echo "invalid username or password";

                         }
 }

                     ?>
</body>
</html>
