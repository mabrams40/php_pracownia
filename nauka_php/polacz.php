<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'Buty';

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    if(!$polaczenie){
        die("Nie można połączyć".mysqli_connect_error());
    }

   
?>