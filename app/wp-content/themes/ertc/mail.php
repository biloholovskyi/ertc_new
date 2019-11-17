<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];




$message = "Имя: ".$name." | Номер: ".$tel." | Email: ".$mail;
$headers = 'From: info@contrust.bz' . "\r\n" .
           'Reply-To: info@contrust.bz' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

//mail('adel@ertc.online', "Новая заявка", $message, $headers);
//mail('albert@ertc.online', "Новая заявка", $message, $headers);
//mail('support@ertc.online', "Новая заявка", $message, $headers);
mail('biloholovskyi@yandex.ru', "Новая заявка", $message, $headers);


