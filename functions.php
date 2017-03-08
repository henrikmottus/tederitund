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
    $files = "array, functions, info";
    $menu_arr = explode(",", $files);
    for($i=0;$i<count($menu_arr);$i++){
        echo '<li><a href="'.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li>';
    }
}



?>