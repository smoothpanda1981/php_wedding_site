<?php
ob_start();

session_start(); 

$c_title = '';
$c_text1 = '';
$c_text2 = '';
$c_text3 = '';


$a_title = '';
$a_text1 = '';
$a_text2 = '';
$a_text3 = '';

$acc_text1 = '';
$acc_text2 = '';
$acc_text3 = '';
$acc_text4 = '';
$acc_text5 = '';
$acc_text6 = '';

if (!$_SESSION['user']) {
    header("Location: logout.php");
    exit;
}

$db_connect = mysql_connect("localhost", "root", "root");
//$db_connect = mysql_connect("mysql-yanwangjelastic2.appengine.flow.ch", "root", "IlqNuwZAhJ");

if (!$db_connect) {
    die('Connexion impossible : ' . mysql_error());
} else {
   //echo 'Connected to MySQL';
   //echo "  ";
}

    $query = sprintf("SELECT * FROM wedding.contact WHERE '%s'", mysql_real_escape_string("1=1"));

    $result = mysql_query($query);
    $num_rows = mysql_num_rows($result);
    
      if ($num_rows == 0) {
        session_destroy(); 
        $message  = 'Invalid Request : ' . mysql_error() . "\n";
        $message .= 'Complet Request : ' . $query;
        die($message);
    } else {
    
        while ($row = mysql_fetch_assoc($result)) {
            //echo $row['title'];
            //echo "  ";
            //echo $row['text1'];
            //echo "  ";
            $c_title = $row['title'];
            $c_text1 = $row['text1'];
            $c_text2 = $row['text2'];
            $c_text3 = $row['text3'];
            
        }
        
        mysql_free_result($result);
    }
    
    $query = sprintf("SELECT * FROM wedding.adresse WHERE '%s'", mysql_real_escape_string("1=1"));

    $result = mysql_query($query);
    $num_rows = mysql_num_rows($result);
    
      if ($num_rows == 0) {
        session_destroy(); 
        $message  = 'Invalid Request : ' . mysql_error() . "\n";
        $message .= 'Complet Request : ' . $query;
        die($message);
    } else {
    
        while ($row = mysql_fetch_assoc($result)) {
            //echo $row['title'];
            //echo "  ";
            //echo $row['text1'];
            //echo "  ";
            $a_title = $row['title'];
            $a_text1 = $row['text1'];
            $a_text2 = $row['text2'];
            $a_text3 = $row['text3'];
            
        }
        
        mysql_free_result($result);
    }


    $query = sprintf("SELECT * FROM wedding.account WHERE '%s'", mysql_real_escape_string("1=1"));

    $result = mysql_query($query);
    $num_rows = mysql_num_rows($result);
    
      if ($num_rows == 0) {
        session_destroy(); 
        $message  = 'Invalid Request : ' . mysql_error() . "\n";
        $message .= 'Complet Request : ' . $query;
        die($message);
    } else {
    
        while ($row = mysql_fetch_assoc($result)) {
            //echo $row['title'];
            //echo "  ";
            //echo $row['text1'];
            //echo "  ";
            $acc_text1 = $row['text1'];
            $acc_text2 = $row['text2'];
            $acc_text3 = $row['text3'];
            $acc_text4 = $row['text4'];
            $acc_text5 = $row['text5'];
            $acc_text6 = $row['text6'];
            
        }
        
        mysql_free_result($result);
    }


ob_end_flush();
?>

<html>
<HEAD>
<TITLE>WEDDING</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="text.css" />
    <link rel="stylesheet" href="960.css" />
    
<body bgcolor="#FF8585"> 
        <div class="top"></div>
        <div class="grey">
            <div class="container_12">
                <div class="space"></div>
            
                <div class="grid_12 img"><img src="img/happiness.png" width="15%" height="15%" alt="img" /></div>
            <div class="grid_12 img"><img src="img/07.png" alt="img" /></div>    
                
                <div class="grid_8 suffix_2 prefix_2">
                <p class="text2"><?php echo $acc_text1 ?></p>
            </div>
            
            <div class="grid_12 img"><img src="img/honeymoon2.jpg" alt="img" /><br><br></div>
                            <div class="grid_2 prefix_2">
                    <p class="text4"><?php echo $acc_text2 ?></p>
                </div>
                <div class="grid_6 suffix_2">
                    <p class="text4"><?php echo $acc_text3 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font class="text3"><?php echo $acc_text4 ?></font></p>
                </div>
                <div class="clear"></div>
                <div class="grid_2 prefix_2">
                    <p class="text4"><?php echo $acc_text5 ?></p>
                </div>
                <div class="grid_6 suffix_2">
                    <p class="text4"><b><?php echo $acc_text6 ?></b></p>
                </div>

                <div class="clear"></div>
                
                <div class="grid_12 space1"></div>
                
              
                
                
            </div>
        </div>
        
        <div class="grey1"></div>
        <div class="grey2">
        <div class="container_12">
            
                            <div class="grid_12 space2"></div>
            

            
                           

            
                <div class="grid_12 img"><img src="img/IMG1.jpg" alt="img" /><br><br></div>
                
                <div class="clear"></div>
                <div class="grid_5 prefix_1">
                    <p class="text4"><u><?php echo $a_title ?></u></p>
                    <p class="text4"><?php echo $a_text1 ?></p>
                    <p class="text4"><?php echo $a_text3 ?></p>
                    <p class="text4"><a href="http://www.lausanne-palace.com/fr/index.php#situation-et-acces.php" target="_blank">Plan d'accès</a></p>
                </div>
                <div class="grid_5 suffix_1">
                    <p class="text4"><u><?php echo $c_title ?></u></p>
                    <p class="text4"><?php echo $c_text1 ?></p>
                    <p class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $c_text2 ?></p>
                    <p class="text4"><?php echo $c_text3 ?></p>
                </div>

                            <div class="grid_12 img"><img src="img/07.png" alt="img" /></div>
<div class="grid_12 img"><img src="img/arabic.png" width="18%" height="18%" alt="img" /></div>
            
   
            <div class="grid_2"></div>
            <div class="grid_12 space3"></div>
            <div class="grid_5 prefix_1"><div class="text5">© Ouafah & Yan 2014</div></div> 
            <div class="grid_5 suffix_1"></div>
        </div>
        </div>
        <div class="foot"></div>
    </body>
</html>

