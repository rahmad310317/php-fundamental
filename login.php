<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   include_once "./koneksi.php";

   if (isset($_POST['submit'])) {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
         echo "Login berhasil";
      } else {
         echo "Login gagal";
      }
   }
   ?>

   <form action="login.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
      <button type="submit" name="submit">Login</button>
   </form>
</body>

</html>