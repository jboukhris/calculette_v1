<?php
require 'Calculator.php';

$resultat = null ;
$calcul = new Calculator;

if (!empty($_POST['simple'])) {
    $nb_1 = $_POST['nb_1'];
    $nb_2 = $_POST['nb_2'];
    $operator = $_POST['operator'];
    if (is_numeric($nb_1) && is_numeric($nb_2)) {

        if ($operator == 'mul') {
            $resultat = $calcul->mul($nb_1, $nb_2);
        } elseif ($operator == 'add') {
            $resultat = $calcul->add($nb_1, $nb_2);
        } elseif ($operator == 'sub') {
            $resultat = $calcul->sub($nb_1, $nb_2);
        }
    }
}
elseif (!empty($_POST['double']))
{
    $note = explode(',' , $_POST['note']);
    $resultat = $calcul->avg($note);
}













include 'show.php';