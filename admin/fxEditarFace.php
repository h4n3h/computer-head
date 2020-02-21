<?php include("header.php"); ?>
<?php include("body.php"); ?>

<?php //template update
echo "Carregando...";

if (isset($_POST['face'])){

    $iid = '1';
    $face = $_POST['face'];

    $update = "UPDATE faces SET atual='$face' WHERE id='$iid'";
    $PDO  = Database::connection();
    $exec = $PDO->exec($update);

    if ($exec) {
        echo '<meta http-equiv="refresh" content="1;URL=faces.php?msg=1">';
        exit();
    }
    
    else {
        echo '<meta http-equiv="refresh" content="1;URL=faces.php?msg=2">';
        exit();
    }
    
}

else{
  echo '<meta http-equiv="refresh" content="1;URL=faces.php?msg=3">';
  exit();
}
?>

<?php include("footer.php"); ?>