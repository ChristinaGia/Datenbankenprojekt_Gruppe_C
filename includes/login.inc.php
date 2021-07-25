<?php
  include_once 'dbh.inc.php'; //DB-Verbindung -> können auf $conn zugreifen
  session_start();


  $persnr = mysqli_real_escape_string($conn, $_POST['pnr']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  $sql = "select Kennwort from mitarbeiter where PersNr = $persnr;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  //alle Daten der DB werden in $row geschrieben
    if ($resultCheck > 0){
      $row = mysqli_fetch_assoc($result);
      if($row['Kennwort'] == $pwd){
        
        $_SESSION['pnr']=$persnr;
        // echo $_SESSION['pnr'];
        header("Location: ../home.php");
      }else{
        echo "Falsches Passwort, versuche es erneut.";
      } 
    } else {
        echo "Diese Personalnummer existiert nicht.";
        
      }
      
  

      
  // echo $row['Name']; //$row ist ein Array
  
  /*
  $_SESSION['pnr']= "1234"; //pnr ist der name der Session mit dem wert 1234
  echo $_SESSION['pnr'];

  if (!isset($_SESSION['pnr'])) {
    echo "You are not logged in!";
  } else {
    echo "You are logged in!";
  } */

/*
    include_once 'includes/db_connection.php';
    //include_once 'header'
    //session_start();
    if(isset ($_POST['submit'])){ //wenn submit da ist, hat der User korrekt auf die Seite zugegriffen (kommt vom Button)
        echo "it works";
    } else {
       header("location: test.php");
    } */
?>