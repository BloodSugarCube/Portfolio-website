<?php
$name = $_POST['name'];
$email = $_POST['email'];
$choice_order = $_POST['choice_order'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$choice_order = htmlspecialchars($choice_order);
$name = urldecode($name);
$email = urldecode($email);
$choice_order = urldecode($choice_order);
$name = trim($name);
$email = trim($email);
$choice_order = trim($choice_order);
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $choice_order;
echo "<br>";
if (mail("bscaa@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email." Выбор: ".$choice_order ,"From: info@bloodsugarcube.com \r\n")){  
    echo "Сообщение успешно отправлено."; 
    } else { 
    echo "При отправке сообщения возникли ошибки.";
}?>