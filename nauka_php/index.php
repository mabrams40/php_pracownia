<?php
     require_once "polacz.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Home Page</title>
    <link rel="stylesheet" href="css/wyglad.css">
</head>
<body>
    <h1>Baza danych</h1>
    <h2>1. SELECT *</h2>
    <?php

     // SELECT * FROM
     $sql = 'SELECT * FROM lista';
     $result = $polaczenie->query($sql);
 
     if($result->num_rows > 0){
 
         echo '
         <table class="tb">
             <tr>
                 <th>id</th>
                 <th>marka</th>
                 <th>nazwa</th>
                 <th>rozmiar</th>
             </tr>
         ';
         while($row = $result->fetch_assoc()){
             echo '<tr>';
             echo '<td>'.$row['id'].'</td>';
             echo '<td>'.$row['marka'].'</td>';
             echo '<td>'.$row['nazwa'].'</td>';
             echo '<td>'.$row['rozmiar'].'</td>';
             echo '</tr>';
         }
 
         echo '</table>';
     }
     else{
         echo 'Tabela jest pusta.';
     }
 
     ?>
     <hr>
     <h2>2. INSERT INTO</h2>
     <form action="insert.php" method="get">
         <label>marka</label><br/>
         <input type="text" name="marka"/><br/><br/>

         <label>nazwa</label><br/>
         <input type="text" name="nazwa"/><br/><br/>

         <label>rozmiar</label><br/>
         <input type="number" name="rozmiar"/><br/><br/>

         <input type="submit">
    </form>
    <hr>
     <h2>3. DELETE FROM</h2>
     <form action="delete.php" method="get">
         <label>id</label><br/>
         <input type="text" name="id"/><br/><br/>

         <input type="submit">
    </form>
    <hr>
    <h2>4. UPDATE SET</h2>
    <form action="update.php" method="get">
         <label>Id</label><br/>
         <input type="text" name="id"/><br/><br/>

         <label>Marka</label><br/>
         <input type="text" name="marka"/><br/><br/>

         <label>Nazwa</label><br/>
         <input type="text" name="nazwa"/><br/><br/>

         <label>Rozmiar</label><br/>
         <input type="text" name="rozmiar"/><br/><br/>

         <input type="submit"><br/><br/>
    </form>
    <hr>
    <h2>5. TRUNCATE TABLE</h2>
    <form action="truncate.php" method="get">
        <input type="submit" value="Usuń zawartość">
    </form>
    <hr>


    <?php $polaczenie->close(); ?>
</body>
</html>