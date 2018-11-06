<?php

$recepient = "handarmar@gmail.com"; 
$sitename = "handarmar.github.io"; 

$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]); 
$phone = trim($_POST["phone"]); 
$text = trim($_POST["text"]); 
$mail = trim($_POST["email"]); 
$usluga = trim($_POST["usluga"]);
$message = "Имя: $name $surname \nТелефон: $phone \nПочта: $mail \nУслуга: $usluga Текст: $text"; 
$message2 = "Спасибо за Вашу заявку, в ближайшее время с Вами свяжется наш менеджер, с ув. команда SkyMedia"; 

$pagetitle = "Новая заявка с сайта \"$sitename\" от \"$name $surname\""; 
$pagetitle2 = "Ваша заявка с сайта \"$sitename\" принята"; 

mail($recepient, $pagetitle, $message, "From: noreply@skymedia.tech\nContent-type: text/plain; charset=\"utf-8\"\n From: $recepient"); 
mail($mail, $pagetitle2, $message2, "From: noreply@skymedia.tech\nContent-type: text/plain; charset=\"utf-8\"\n From: $mail");
