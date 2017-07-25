<?php
$editid = $_GET['id'];
$editname = $_GET['name'];
if(!$con = pg_connect("host=localhost user=postgres password=leonardo4774221  dbname=biblioteca")) echo "Azedou1";
if($req = pg_query($con, "update livros set nomer = '$editname', reserved = true where id = $editid;")) $d = 1;
else echo"Azedou2";
?>
