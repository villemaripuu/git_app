<?php

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    
    if ($time >= "19:40"){
        echo 'Kell on '.$time.' Aeg on koju minna<br>';
    } else {
        echo "Kell on ".$time." Peab veel kannatama!<br>";
    }
    
}

function home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>';
}

function GetVisitorIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");
    $visitor = $ip." : ". $time."\n";
    $file = fopen('visitor.txt',"a") or die("Ei saanud avada");
    fwrite($file, $visitor);
        echo "Külastate seda saiti aadressilt: ".$ip."<br>";
    fclose($file);
    counter();    
    
}

function counter(){
  $visitorCounterFile = "visits.txt";

  $file = fopen($visitorCounterFile, 'r+') or die("unable to access visits.txt");
    $count = intval(file_get_contents($visitorCounterFile));
    $count++;
    fwrite($file, $count);

    fclose($file);

    echo "olete lehe " . $count . ". külastaja";
}
?>
