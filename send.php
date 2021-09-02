<?php
//Принимаем постовые данные
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
//Тут указываем на какой ящик посылать письмо
$to = "vetal.marus@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Фамилия пользователя: ".htmlspecialchars($lastname)."<br />
Почта пользователя: ".htmlspecialchars($email)."<br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone_number)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: INFO <admin@website.com>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: http://f0576255.xsph.ru/thanks.php');
exit();
?>
