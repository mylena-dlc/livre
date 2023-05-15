<?php 
    require "Livre.php"; 
    require "Auteur.php"; // on ajoute les 2 fichiers comprenant les classes pour "lier" les classes à l'index.php

// création et utilisation des instances de classes
$a1 = new Auteur("King", "Stephen");

$l1 = new Livre("Ca", 1138, 1986, 20, $a1);
$l2 = new Livre("Simetierre", 374, 1983, 15, $a1);
$l3 = new Livre("Le Fléau", 823, 1978, 14, $a1);
$l4 = new Livre("Shining", 447, 1977, 16, $a1);



 $a1->afficherBibliographie();




?>