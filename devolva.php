<?php
$removeid = $_GET['id'];
  if(!$con = pg_connect("host=localhost user=postgres password=leonardo4774221  dbname=biblioteca")) echo "Azedou1";
  if($req = pg_query($con, "update livros set nomeb = NULL, borrowed = false where id = $removeid;")) $d = 1;
  else echo"Azedou2";
?>
