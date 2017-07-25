<?php
if(!$con = pg_connect("host=localhost user=postgres password=leonardo4774221  dbname=biblioteca")) echo "Azedou1";
$res = pg_query($con, "select * from livros where nomeb = '$login';");
while ($row = pg_fetch_row($res, $i)) {
  echo("<tr>");
  for ($j=0; $j < count($res); $j++) {
    echo "<td class='text-center'>";
    echo($row[1]);
    echo "</td>";
    echo "<td class='text-center'>";
    echo($row[2]);
    echo "</td>";
    echo "<td class='text-center'>";
    echo "<a href='devolvido.php?id=$row[0]'> <button type='submit' class='btn btn-default'>Devolver</button>";
    echo "</td>";
  }
  echo("</tr>");
}
pg_close($con);
  ?>
