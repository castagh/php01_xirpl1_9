<!DOCTYPE html>
<head>
    <title>Perulangan</title>
</head>
<body>
    <h1>Perulangans</h1>
    <?php
    echo date("Y-m-d") . "<br>";
    ?>

    <br>
    <br>
    
    <?php
    echo date ("h:i:s");
    ?>
    <br>
    <br>
    <?php
    $star=6;
    for($a=1; $a<=$star; $a++){
        for($c=$star; $c>=$a; $c-=1){
               echo "*";
        }
         echo "<br>";
   }
?>
</body>
<html>

