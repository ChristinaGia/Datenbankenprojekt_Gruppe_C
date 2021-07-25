<?php 
    session_start();
    if (isset($_SESSION['name']) == false)
    {
        header('Location: login.php');
    }
    exit;
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Login 
</title>

</head>
<body>
    <h1> Home </h1>
</body>
</html>