<?php

$recepient = "superqiwiburn@gmail.com";
$siteName = "QiwiCash";

// $name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Контакты: $phone";

$pagetitle = "Заявка с сайта \"$recepient\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>