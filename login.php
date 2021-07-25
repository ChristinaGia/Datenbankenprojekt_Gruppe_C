<?php
  include_once 'includes/dbh.inc.php'; //DB-Verbindung -> können auf $conn zugreifen
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>
    Login
</title>

</head>
<body>

    <h1> Login </h1>
    <form method= "POST" action=login.script.php> <!-- action = wo die Daten hingeleitet werden sollen, nach dem submit -->
        <input type = "text" name = "pnr" placeholder = "Personalnummer"> <br/> 
        <input type ="password" name = "pwd" placeholder = "Passwort"> <br/>  <br/>
        <button type = "submit" name ="submit"> Anmelden </button> <br/>
</form>

<?php

  $sql = "select Kennwort from mitarbeiter where PersNr =  = pwd;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  while ($row = mysqli_fetch_assoc($result)) { //alle Daten der DB werden in $row geschrieben
    echo $row['Name']; //$row ist ein Array
  }

  $_SESSION['pnr']= "1234"; //pnr ist der name der Session mit dem wert 1234
  echo $_SESSION['pnr'];

  if (!isset($_SESSION['pnr'])) {
    echo "You are not logged in!";
  } else {
    echo "You are logged in!";
  }
?>
</body>
</html>