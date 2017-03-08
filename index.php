<script type="text/javascript">
    //JS realtime clock woot
    window.onload = function (){
        (function (){
            var date = new Date();
            var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
            document.getElementsByTagName('div')[0].innerHTML = "JS aeg: " + time;
            window.setTimeout(arguments.callee, 1000);
        })();
    };

</script>

<?php

$date = "08.03.2017";
$number = 5;

echo $date.", kolmas tund.<br>";

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if($time > "16:00"){
        echo "Tund läbi, järgmine tund!";
    }
    else{
        echo "Peab kannatama!";
    }
}
echo "<div></div>";

aeg();
?>