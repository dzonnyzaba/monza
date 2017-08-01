<?php

require_once 'glowna.php';

$zawartosc = "Monza to niewielkie miasto i gmina w północnych Włoszech, "
        . "w regionie Lombardia, w prowincji Monza i Brianza. "
        . "Potocznie nazwą tą określa się również tor "
        . "wyścigowy leżący nieopodal tego miasta. "
        . "Niniejsza strona poświęcona jest właśnie "
        . "temu obiektowi, który od niemal stu lat "
        . "zajmuje jedno z ważniejszych miejsc w "
        . "kalendarzu fana sportów motorowych...";

$glowna = new Glowna($zawartosc);

$glowna->wyswietlHead();
$glowna->wyswietlNaglowek();