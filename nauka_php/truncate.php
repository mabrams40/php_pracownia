<?php

require_once "polacz.php";

$sql = "TRUNCATE TABLE lista";
$result = $polaczenie->query($sql);

if($result){
    echo "Usunięto zawartość!";
}
else{
    echo "Błąd!";
}

header("Location: index.php");
?>