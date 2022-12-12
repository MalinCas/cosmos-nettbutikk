<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
   <title>Login</title>
</head>
<body>

   <header>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">About Us</a></li>
      </ul>
      <a href="#" class="logo">logo</a>
  </header>

  <div class="login-card-container">
<div class="login-card">
    <div class="login-card-header">
        <h1>Sign in</h1>
            <div>Login to use platform</div>
            </div> <!--login-card-header-->
            <form class="login-card-form" method="post">
                <label for="brukernavn">Username</label>
                <input type="text" name="brukernavn">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <div class="check">
                </div>
                <p><a href="registration.php">Don't have an account? Sign up here!</a></p>
                <button type="submit" name="submit">Login</button>
            </form>
            </div>
    </div>
    </form>

   <?php

if(isset($_POST['submit'])){

    $brukernavn = $_POST['brukernavn'];
    $passord = $_POST['passord'];


    $dbc = mysqli_connect('localhost', 'root', '', 'cosmos')
        or die('Error connecting to MySQL server');

    $query = "SELECT brukernavn, passord from brukere where brukernavn='$brukernavn' and passord='$passord'";

    $result = mysqli_query($dbc, $query)
        or die('Error querying database.');

    mysqli_close($dbc);
    // var_dump($result);

    if($result->num_rows > 0){

        header('location: index.html');
        var_dump('bra');

    }else{

        header('location: login.php');
        var_dump('ikke bra');
    }
}

?>

</body>
</html>