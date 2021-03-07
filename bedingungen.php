<?php 

# Infoaufgaben 04. - 10. Januar
# Hendrik Higl - hig
# 07. Januar 2021

    // 2.1
    $n = 54;
    $p = 0;

    if ($p != 0) {
        $br = $n / $p;
    }
    

    // 3.1
    if ($p != 0) {
        $br = $n / $p;
    } else {
        echo "<h2>P darf nicht 0 sein!</h2>";
    }

    // 3.2
    if ($p != 0) {
        $br = $n / $p;
        echo "<h2>Bruch erfolgreich berechnet!</h2>";
    } else {
        echo "<h2>P darf nicht 0 sein!</h2>";
    }
    

    // 4.1
    $T = 18;
    if ($T < 18) {
        echo "Es ist kühl. Die Temperatur beträgt $T Grad";
    } elseif ($T >= 18 && $T < 24) {
        echo "Es ist angenehm. Die Temperatur beträgt $T Grad";
    } elseif ($T >= 24 && $T < 28) {
        echo "Es ist warm. Die Temperatur beträgt $T Grad";
    }

    // 5.1
    $x = -4;
    if ($x > 0) {
        echo "x = $x ist positiv<br>";
    } elseif ($x < 0) {
        echo "x = $x ist negativ<br>";
    } else {
        echo "x = $x ist Null";
    }

    // 5.2
    $T = 40;
    if ($T < 18) {
        echo "Es ist kalt. Die Temperatur beträgt $T Grad";
    } elseif ($T >= 18 && $T < 24) {
        echo "Es ist angenehm. Die Temperatur beträgt $T Grad";
    } elseif ($T >= 24 && $T < 28) {
        echo "Es ist warm. Die Temperatur beträgt $T Grad";
    } else {
        echo "Es ist heiß. Die Temperatur beträgt $T Grad";
    }
?>