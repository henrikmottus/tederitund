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
include "functions.php";


$date = "08.03.2017";
$number = 5;

echo $date.", kolmas tund.<br>";


echo "<div></div>";

aeg();
?>