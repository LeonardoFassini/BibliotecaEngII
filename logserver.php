<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Nome ou senha inválidos";
  }
  else
  {
    // Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!$con = pg_connect("host=localhost user=postgres password=leonardo4774221  dbname=biblioteca")) echo "Azedou1";
    if(!$req = pg_query($con, "select count(*) from users where login = '$username' and senha = '$password'")) echo"Azedou2";
    if(pg_num_rows($req) == 1){
      $_SESSION['login']= $username;
      echo($_SESSION['login']);
      header("loggedin.php");
    }
    else {
      $error = "Login ou senha inválidos";
    }
  }
}
?>
