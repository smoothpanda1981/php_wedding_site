<?php
ob_start();
$db_connect = mysql_connect("localhost", "root", "root", "wedding");

if (!$db_connect) {
    die('Connexion impossible : ' . mysql_error());
} else {
    echo 'Connected to MySQL';
}

$username = $_POST['username'];
$password  = $_POST['password'];


if (isset($username) & isset($password)) {
    $query = sprintf("SELECT * FROM wedding.admin WHERE username='%s' AND passcode='%s'", mysql_real_escape_string($username), mysql_real_escape_string($password));
    
    // Exécution de la requête
    $result = mysql_query($query);
    $num_rows = mysql_num_rows($result);
    
    echo $num_rows;
    echo "  ";
    
    // Vérification du résultat
    // Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
    if ($num_rows == 0) {
        $message  = 'Requête invalide : ' . mysql_error() . "\n";
        $message .= 'Requête complète : ' . $query;
        die($message);
    } else {
    
        while ($row = mysql_fetch_assoc($result)) {
            echo $row['username'];
            echo "  ";
            echo $row['passcode'];
        }
        mysql_free_result($result);
        
       header("Location: wedding.php");
       exit;
    }
}
ob_end_flush();
?>

<html>
    <body>
        <form action="" method="post">
            <label>User Name :</label>
            <input type="text" name="username"/><br />
            <label>Password :</label>
            <input type="password" name="password"/><br/>
            <input type="submit" value=" Submit "/><br />
        </form>
    
    </body>
</html>

