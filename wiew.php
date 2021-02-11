<?php
$code=$_GET["code"];
?>

<h1>Ecco i risultati per il codice <?php echo $code; ?></h1>
<br><br>
<?php
include("codes/fwiew.php");
?>

Usato: <?php echo $used; ?> volte
