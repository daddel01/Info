<?php
    $Px = $_GET['Px'];
    $Py = $_GET['Py'];
    $Qx = $_GET['Qx'];
    $Qy = $_GET['Qy'];

    $Px = 0;
    $Py = 1;
    $Qx = 4;
    $Qy = 7;

    // Aufgabe 1
    if ($Px == $Qx && $Py == $Qy) {
        echo "<h3 style='color:red'>Punkte dürfen nicht übereinstimmen!</h3>";
    }

    $d = sqrt( ($Px-$Qx)**2 + ($Py - $Qy)**2);

    $phi = $_GET['phi'];
    $phi = 0;

    // Aufgabe 2
    if ($phi < 0) {
        $alpha = abs($phi);
        echo "... ist eine ${$alpha}°-Linkskurve \n";
    } elseif ($phi > 0) {
        echo "... ist eine ${$phi}°-Rechtskurve \n";
    } else {
        echo "... ist eine Gerade \n";
    }

    // Aufgabe 3
    if ($phi != 0) {
        $r = $d / (2* sin(pi()/180 * $phi /2));
        $h = sqrt( $r**2 - ($d/2)**2);

        // Aufgabe 4
        $beta = abs($phi);
        if ($beta < 180) {
            if ($phi < 0) {
                $h *= -1;
            }
        } elseif ($beta > 180) {
            if ($phi > 0) {
                $h *= -1;
            }
        } else {
            $h = $h;
        }

        // Aufgabe 5
        $Mx = ($Px + $Qx) / 2 + $h * (($Qy - $Py) / $d);
        $My = ($Py + $Qy) / 2 - $h * (($Qx - $Px) / $d);

        echo "d = $d \n";
        echo "R = $r \n";
        echo "h = $h \n";
        echo "M = ( $Mx | $My ) \n";
    }

?>