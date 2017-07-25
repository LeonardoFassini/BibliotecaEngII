<?php
if(!$con = pg_connect("host=localhost user=postgres password=leonardo4774221  dbname=biblioteca")) echo "Azedou1";
$res = pg_query($con, "insert into livros(Id, nome, autor, reserved, borrowed, nomeb, nomer) values(DEFAULT, '$_POST[nome]', '$_POST[autor]', false, false, NULL, NULL)");
if($res) echo"O livro foi inserido com sucesso!";
else {
  echo "O livro não foi inserido.";
}
?>
