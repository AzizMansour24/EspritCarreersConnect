<?php
require_once '../../Controller/Offre_empC.php';

$offreController = new OffreEmpC();
$offreController->deleteOffre($_GET['id']);
header('location:listOfr.php');
?>