<?php
//Если форма была отправленна, то выводим ее содержимое на экран
if($_POST) {
$to = "temofey1983@mail.ru"; // почта, на которую будет приходить письмо galina@agro-personal.ru
$from = $_POST['name'];
$phone = $_POST['phone'];
$model = $_POST['model'];
$year = $_POST['year'];
$vdvg = $_POST['v-dvg'];
$kuzov = $_POST['kuzov'];
$zapch = $_POST['zapch'];


$headers = "Reply-To: ".$to."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: ". $from ." \r\n";
$subject = "Заявка на запчасти BMW";

$msg = "";
$msg .= $from." <br>";
$msg .= $phone."<br> ";
$msg .= $model." <br>";
$msg .= $year." <br>";
$msg .= $vdvg." <br>";
$msg .= $kuzov." <br>";
$msg .= $zapch." ";


$result = mail($to, $subject, $msg, $headers);
if ($result){ echo "Cообщение успешно отправленно."; }
}

?>