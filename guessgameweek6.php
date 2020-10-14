<html>
<head>
<title>Guess game for Pranjul Chaurasiya</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
  $check=62;
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] <$check ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > $check ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
  //http://a92c4236b374.ngrok.io/project1c/guessgameweek6.php
?>
</p>
</body>
</html>
  