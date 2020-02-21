<?php include("header.php"); ?>
<?php include("body.php"); ?>
<style type="text/css">
  .col-4 img{
    width: 100%;
  }
</style>
<h2>Faces</h2>
<?php if(isset($_GET['msg'])){ if($_GET['msg']==1){?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sucesso!</strong> Salvo!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<?php if($_GET['msg']==2){?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Falha!</strong> Não foi possível salvar informação.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<?php if($_GET['msg']==3){?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Falha!</strong> Campos em branco.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } } ?>
<div class="row">
	<div class="col-md-12" style="text-align: center;">
		<?php
            $PDO = Database::connection();
              $consulta = $PDO->query("SELECT * FROM faces");
              $linhas = $consulta->rowCount();
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
                <img src="../microsoft/<?php echo $linha['atual']; ?>" class="faceatual">
    <?php } ?>
	</div>
</div>
<hr>
<form action="fxEditarFace.php" method="POST" enctype="multipart/form-data">
<div class="row" style="text-align: center;">
  <?php for ($i=1; $i <= 48; $i++) { ?>
    <div class="col-4">
      <div class="form-check">
        <input name="face" class="form-check-input" type="radio" value="<?php echo $i; ?>.png">
        <label class="form-check-label">
          <img src="../microsoft/<?php echo $i; ?>.png">
        </label>
      </div>
    </div>
  <?php } ?>
</div>

<br>
<button type="submit" class="btn btn-success btn-block">Salvar</button>
</form>

<?php include("footer.php"); ?>