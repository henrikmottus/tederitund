<?php
back_home();
menu();
function back_home(){
    echo '<li><a href="index.php">Tagasi algusesse</a></li>';
}
function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if($time > "16:00"){
        echo "Tund läbi, järgmine tund!";
    } else{ echo "Peab kannatama!";}
}

function menu(){
    $files = "array, functions, info, file, curl";
    $menu_arr = explode(",", $files);
    for($i=0;$i<count($menu_arr);$i++){
        echo '<li><a href="'.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li>';
    }
}

function counter(){
    $file_name = "count.txt";
    if(file_exists($file_name)){
        $file = fopen($file_name, "r+") or die("pahasti");
        $arv = file_get_contents($file_name) + 1;
        fwrite($file, $arv);
        echo "Olete külastaja nr ". $arv;
        fclose($file);
    }
    else{
        $file = fopen($file_name, "w") or die("pahasti");
        $arv = 1;
        fwrite($file, $arv);
        echo "Olete külastaja nr ". $arv;
        fclose($file);
    }
    
}

function GetIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $file_name = 'visitor.txt';
    $time = date("d.m.Y H:i:s");
    $visitor = $ip." ".$time."\n";
    $file = fopen($file_name, "a") or die("Nope");
    echo "Külastaja aadress on ".$ip;
    fwrite($file, $visitor);
    fclose($file);
}

?>