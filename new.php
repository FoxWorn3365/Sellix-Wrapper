<form method="post">
    Inserisci il Codice:<br>
    <input type="text" name="code"><br>
    Inserisci l'uniqid:<br>
    <input type="text" name="id"><br><br>
    <button type="submit">Crea!</button>
</form>


<?php
$code=$_POST["code"];
$id=$_POST["id"];

if (empty($code)) {
   die();
}
if (empty($id)) {
   die();
}

$file="codes/$code.php";
$string="%codice='$id';";
$h=fopen($file, "w+");
$string=str_replace("%", "$", $string);
fwrite($h, "<?php $string ?>");
fclose($h);

echo "Fatto!";
?>