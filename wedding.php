

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 
    <?php
    ob_start();
session_start(); 

if (!$_SESSION['user']) {
    echo "<a href='login.php'>Back to login page</a>";
} else {
    echo "<p>Mariage de Ouafah et Yan</p>>27 septembre 2014</p>>compte bancaire : CHXX XXXX XXXX XXXX</p>";
}
ob_end_flush();
?> 
 </body>
</html>