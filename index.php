<!DOCTYPE html>
<html>
 <head>
  <title>Sellix.io Wrapper</title>
 </head>
 <body>
 <center>
  <br><br><br><br><br>
  <h1>Inserisci QUI il tuo codice per veder quante volte &egrave; stato Utilizzato!</h1>
  <br><br>
  <form id="1" method="post">
      Inserisci il Codice:<br>
      <input name="codice" type="text"><br><br>
      <button type="submit">Cerca!</button>
  </form>
 </center>
 </body>
</html>

<?php
$code=$_POST["codice"];
if (empty($code)) {
   die();
}

header("Location: wiew?code=$code");
?>


                                              
