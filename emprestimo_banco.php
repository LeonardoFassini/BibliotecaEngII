<?php
if(!$con = pg_connect("host=localhost user=postgres password=leonardo4774221  dbname=biblioteca")) echo "Azedou1";
$res = pg_query($con, "select * from livros");
while ($row = pg_fetch_row($res, $i)) {
  echo("<tr>");
  for ($j=0; $j < count($res); $j++) {
    echo "<td class='text-center'>";
    echo($row[1]);
    echo "</td>";
    echo "<td class='text-center'>";
    echo($row[0]);
    echo "</td>";
    echo "<td class='text-center'>";
    echo($row[2]);
    echo "</td>";
    echo "<td class='text-center'>";
    if($row[3] == "f" && $row[4] == "t") echo"<a href='reserva.php?id=$row[0]&name=$name'> <button type='button' class='btn btn-primary text-center'> Reservar </button> </a>";
    echo "</td>";
    echo "<td class='text-center'>";
    if($row[4] == "f" && $row[3] == "f") echo"<a href='emprestado.php?id=$row[0]&name=$name'> <button type='button' class='btn btn-primary text-center'> Emprestar </button> </a>";
    echo "</td>";
  }
  echo("</tr>");
  }
  pg_close($con)  ;
  ?>
