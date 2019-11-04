<?php
$name = $_POST['custom_U4120'];
$email = $_POST['Email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = trim($name);
$email = trim($email);
if (mail("guru@freecell.world", "Заявка с сайта", "Имя: $name $email", "From: info@softmobile.world \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>