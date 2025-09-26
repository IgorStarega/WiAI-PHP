<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Zadanie 1<br>";
        $reszta = 23 % 7;
        echo "Reszta z dzielenia 23 przez 7 to: $reszta";
    ?>
    <?php
        echo "<br>Zadanie 2<br>";
        $x=5;
        $y=6;
        $wynik=(2*$x-0.5*$y)/4;
        echo "Wynik to: $wynik";
    ?>
    <?php
        echo "<br>Zadanie 3<br>";
        $x=57;
        $y=208;
        $suma=$x+$y;
        echo "Suma liczb $x i $y to: $suma";
        $iloczyn=$x*$y;
        echo "<br>Iloczyn liczb $x i $y to: $iloczyn";
        $różnicabitowa=$x^$y;
        echo "<br>Różnica bitowa liczb $x i $y to: $różnicabitowa";
    ?>
</body>
</html>