<?php
ob_start();

session_start(); 
//$db_connect = mysql_connect("localhost", "root", "root");
$db_connect = mysql_connect("mysql-ouafahyan-mariage.appengine.flow.ch", "root", "4HFsnppown");

if (!$db_connect) {
    die('Connexion impossible : ' . mysql_error());
} else {
   // echo 'Connected to MySQL';
   // echo "  ";
}

if (!$_SESSION['user']) {
  // echo 'no session';
  // echo "  ";
} else {
  // echo 'session available';
  // echo "  ";
}


$username = $_POST['username'];
$password  = $_POST['password'];


if (isset($username) & isset($password)) {
    $query = sprintf("SELECT * FROM wedding.admin WHERE username='%s' AND passcode='%s'", mysql_real_escape_string($username),  mysql_real_escape_string($password));
    
    // Exécution de la requête
    $result = mysql_query($query);
    $num_rows = mysql_num_rows($result);
    
    //echo $num_rows;
    //echo "  ";
    
    // Vérification du résultat
    // Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
    if ($num_rows == 0) {
        session_destroy(); 
        header("Location: logout.php");
        exit;
        //$message  = 'Invalid Request : ' . mysql_error() . "\n";
        //$message .= 'Complet Request : ' . $query;
        //die($message);
    } else {
    
        while ($row = mysql_fetch_assoc($result)) {
            //echo $row['username'];
            //echo "  ";
            //echo $row['passcode'];
            // echo "  ";
        }
        mysql_free_result($result);
        
        $_SESSION['user']=$username;
        //echo $_SESSION['user'];
        // echo "  ";

        
       header("Location: wedding.php");
       exit;
    }
}
ob_end_flush();
?>

<html>
<HEAD>
<TITLE>LOGIN</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="text.css" />
    <link rel="stylesheet" href="960.css" />
    
<body bgcolor="#CFCFE1"> 
        <div class="top"></div>
        <div class="grey">
        <div class="container_12">
        <div class="space"></div>
        <div class="grid_12 img"><img src="img/wedding.png" alt="img" /></div>
        <div class="grid_12"><p class="text">Ouafah et Yan se marient le 27 septembre 2014 !</p></div>
        <div class="grid_12 img"><img src="img/07.png" alt="img" /></div>
        <div class="grid_12 img"><img src="img/06.png" alt="img" /></div>
        <div class="grid_12 img"><img src="img/07.png" alt="img" /></div>
        <div class="clear"></div>
        <div class="grid_5 prefix_1"><p class="text2"></p>
        <p class="text1"></p></div>
        <div class="grid_5 suffix_1"><p class="text2">&nbsp;</p><p class="text1"></p></div></div></div>
        <div class="grey1"></div>
        <div class="grey2">
        <div class="container_12">
        <div class="grid_12 space1"></div>
        <div class="grid_12 img"><img src="img/tape2.png" alt="img" /><br><br><br></div>
        <div class="grid_8 suffix_2 prefix_2"><p class="text4">Connectez-vous avec le nom d'utilisateur et le mot de passe que vous aviez reçu avec le faire-part !</p></div>
        <div class="grid_12 top2"></div>
        
        <form action="" method="post">
            <div class="grid_2 prefix_2">
                <p class="text4">Nom :</p>
            </div>
            <div class="grid_6 suffix_2">
                <input name="username" type="text" class="colortext"   />
            </div>
            <div class="clear"></div>
            <div class="grid_2 prefix_2">
                <p class="text4">Mot de passe :</p>
            </div>
            <div class="grid_6 suffix_2">
                <input name="password" type="password" class="colortext"   />
            </div>
            <div class="clear"></div>
            <div class="grid_12 space2"></div>
            <div class="grid_10">
                <input type="image" class="buttonsubmit" src="img/connecter.png" alt="se connecter" />
           </div>
        </form>   
   
           <div class="grid_2"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
              <div class="grid_12 space3"></div>
           <div class="grid_5 prefix_1"><div class="text5">© Ouafah & Yan 2014</div></div> 
           <div class="grid_5 suffix_1"></div>
        </div></div>
        <div class="foot"></div>
    </body>
</html>

