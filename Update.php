<?php
require_once ('config/connect.php');
$Имя = $_POST['Имя'];
$Фамилия = $_POST['Фамилия'];
$Отчество = $_POST['Отчество'];
$Возраст = $_POST['Возраст'];
$ЭлектроннаяПочта = $_POST['ЭлектроннаяПочта'];
$Телефон = $_POST['Телефон'];
$sql = "INSERT INTO `АдминистраторБД`(`Имя`, `Фамилия`, `Отчество`, `Возраст`, `ЭлектроннаяПочта`, `Телефон`) 
VALUES ('$Имя','$Фамилия','$Отчество','$Возраст','$ЭлектроннаяПочта','$Телефон')";
$connect -> query ($sql);
header ('location: index1.php');
?>

