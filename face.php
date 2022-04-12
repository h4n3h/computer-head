<?php include("config.php"); //SEMPRE NO TOPO ?>
<?php
$PDO = Database::connection();
$consulta = $PDO->query("SELECT * FROM faces");
$linhas = $consulta->rowCount();
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
{"atual":"<?php echo $linha['atual']; ?>"}
<?php } ?>