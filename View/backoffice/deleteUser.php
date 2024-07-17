<?php
include '../../Controller/userC.php';
$employeC = new usersC();
$employeC->deleteUser($_POST["email"]);
header('Location: busers.php');
