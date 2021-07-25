<!DOCTYPE html>
<html>
<head>
  <title>
    Login 
</title>

</head>
<body>

    <h1> Login </h1>
    <form method= "POST" action=includes/login.inc.php> <!-- action = wo die Daten hingeleitet werden sollen, nach dem submit -->
        <input type = "text" name = "pnr" placeholder = "Personalnummer"> <br/> 
        <input type ="password" name = "pwd" placeholder = "Passwort"> <br/>  <br/>
        <button type = "submit" name ="submit"> Anmelden </button> <br/>
</form>

</body>
</html>