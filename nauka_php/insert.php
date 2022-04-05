<?php
    require_once "polacz.php";

    $marka = $_GET['marka'];
    $nazwa = $_GET['nazwa'];
    $rozmiar = $_GET['rozmiar'];

    $sql = "INSERT INTO lista VALUES
    (NULL, '$marka', '$nazwa', '$rozmiar')";

    $result = $polaczenie->query($sql);

    if($result){
        echo 'Wstawiono rekord.';
    }
    else{
        echo 'Błąd';
    }

    header('Location: index.php');
?>