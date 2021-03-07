<?php 
    // Aufgabe 1
    $nmax = 23;
    $n = 12;
    while ($n <= $nmax) {
        echo "$n, ";
        $n++;
    }

    echo "\n";

    // Aufgabe 2
    $nmax = 19;
    $n = 11;
    while ($n <= $nmax) {
        echo "$n, ";
        $n += 2;
    }
    echo "\n";
    // Aufgabe 3a
    $nmax = 10;
    $n = 0;
    while ($n <= $nmax) {
        $q = 4 ** $n;
        echo "4^$n = $q, ";
        $n++;
    }
    echo "\n";
    //Aufgabe 3b
    $n = 0;
    $nmax = 10;
    $q = 1;
    while($n <= $nmax) {
        echo "4^$n = $q, ";
        $q *= 4;
        $n++;
    }
    echo "\n";
    //Aufgabe 3c
    $q = 1;
    while($q < 1000000) {
        echo "Potenz = $q, ";
        $q *= 4;
    }
    echo "\n";
    //Aufgabe 4a
    $betrag = 10000;
    $zinssatz = 4;
    $jahr = 1;
    while ($jahr <= 10) {
        $betrag *= (1 + $zinssatz / 100);
        echo "Jahr: $jahr, Schulden: $betrag \n";
        $jahr++;
    }
    echo "\n";
    //Aufgabe 4b
    $betrag = 10000;
    $lb = $betrag;
    $zinssatz = 4;
    $jahr = 1;
    while ($jahr <= 10) {
        $betrag *= 1 + ($zinssatz / 100);
        $p = $lb * (1 + $zinssatz / 100) ** $jahr;
        echo "Jahr: $jahr, Schulden: $betrag, Prüfung: $p \n";
        $jahr++;
    }
    echo "\n";
    //Aufgabe 5a
    $betrag = 10000;
    $zs = 4;
    $rate = 150;
    $jahr = 1;
    while ($jahr <= 10) {
        $betrag -= ($rate - ($betrag * ($zs / 12) / 100));
        echo "Jahr: $jahr, Restschulden: " . round($betrag,2) . " \n";
        $jahr++;
    }
    echo "\n";
    //Aufgabe 5b
    $betrag = 10000;
    $lb = $betrag;
    $zs = 4;
    $rate = 150;
    $jahr = 1;
    while ($jahr <= 10) {
        $betrag -= ($rate - ($betrag * ($zs / 12) / 100));
        $p = $rate / ($zs / 1200) - ($rate / ($zs / 1200) - $lb) * (1 + $zs / 1200) ** $jahr;
        echo "Jahr: $jahr, Restschulden: " . round($betrag,2) . ", Prüfung: " . round($p, 2) ." \n";
        $jahr++;
    }

?>