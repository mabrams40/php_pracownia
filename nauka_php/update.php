<?php

require_once "polacz.php";

$id = $_GET['id'];
$marka = $_GET['marka'];
$nazwa = $_GET['nazwa'];
$rozmiar = $_GET['rozmiar'];

$sql = "UPDATE lista SET marka='$marka',
 nazwa='$nazwa', rozmiar='$rozmiar' WHERE id='$id';";

$result = $polaczenie->query($sql);
if($result){
    echo "Succesfull update!";
}
else{
    echo "Error updating table.";
}

header("Location: index.php");

?>