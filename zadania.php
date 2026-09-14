<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 12;
    echo "Wartość zmiennej = " .$a;
    echo "Liczbę przeciwną do zmiennej = " .-$a;
    echo "Zmienna powiększona o 3 = " .$a+3;
    echo "Zmienna pomniejszona o 5 = " .$a-5;
    echo "Zmienna pomnożona przez 2 = " .$a*=2;
    echo "Zmienna podzielona przez 5 = " .$a/5;
    echo "Wartość reszty z dzielenia zmiennej przez 2 = " .$a%2;
    echo "Wartość zmiennej podniesioną do 3 potęgi = " .$a*$a*$a;
    echo "Wartość zmiennej wynosi: " .$a. " i już się nie zmieni.";

    ?>
</body>
