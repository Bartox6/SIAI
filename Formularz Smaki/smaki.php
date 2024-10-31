<?php
if(isset($_POST["imie"]) && isset($_POST["smak"])){
    $imie = $_POST["imie"];
    $smak =  $_POST["smak"];

    echo "Witaj $imie, Twoje ulubione smaki to:";
    foreach ($smak as $x){
        echo " $x";
    }
}
?>