<?php
    require_once "polacz.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM lista WHERE id='$id'";

    $result = $polaczenie->query($sql);

    if($result){
        echo 'Usunięto rekord.';
    }
    else{
        echo 'Błąd';
    }

    header('Location: index.php');
?>