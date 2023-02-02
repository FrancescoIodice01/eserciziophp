<?php
session_start();

$host = "localhost";
$username = "Francesco";
$password = "1234";
$db_name = "esercizio";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

if (isset($_POST['nickname']) && isset($_POST['passwd'])) {
  $nickname = $_POST['nickname'];
  $passwd = $_POST['passwd'];

  $query = "SELECT * FROM utenti WHERE nickname='$nickname' AND passwd='$passwd'";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['logged_in'] = true;
    $_SESSION['nickname'] = $nickname;
    header("Location: home.php");
    exit;
  } else {
    echo "Nickname o password non corretti, riprova";
  }
}

mysqli_close($conn);
?>


<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="container my-5">
  <div class="card mx-auto" style="width: 500px;">
    <div class="card-body">
      <h5 class="card-title text-center">Login</h5>
      <form action="home.php" method="post">
        <div class="form-group">
          <label for="nickname">Nickname</label>
          <input type="nickname" class="form-control" id="nickname" name="nickname" required>
        </div>
        <div class="form-group">
          <label for="passwd">Password</label>
          <input type="passwd" class="form-control" id="passwd" name="passwd" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="reset-password.php" class="btn btn-link">Password Dimenticata?</a>
      </form>
    </div>
  </div>
</div>
<button class="btn btn-success" style="margin-left: 47%; margin-right: 50%"><a href="registration.php" style="color: white;">Registrati subito!</a></button>

  </body>
</html>
