<?php include("header.php"); ?>
<?php include("body.php"); ?>
	<div class="col-md-12" style="text-align: center;" id="face">
		<?php
            $PDO = Database::connection();
              $consulta = $PDO->query("SELECT * FROM faces");
              $linhas = $consulta->rowCount();
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
                <img src="microsoft/<?php echo $linha['atual']; ?>" class="face">
    <?php } ?>
	</div>
<?php include("footer.php"); ?>