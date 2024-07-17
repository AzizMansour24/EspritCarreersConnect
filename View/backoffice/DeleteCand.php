<?php
require_once '../../Controller/CandidatureC.php';

$candController = new CandidatureC();
$candController->deleteCandidature($_GET['candidature_id']);
header('location:listCand.php');
?>