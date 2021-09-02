<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Получите свою прибыль уже сегодня</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/thanks.min.css">
</head>
<body style="height: 100vh">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    В течении 24 часов на указанный email придет письмо с подробной инструкцией.<br>
                    Если письмо не появилось в папке «Входящие», проверьте папку «Спам».<br>
                    Если вы не получили письмо, пожалуйста, обратитесь в тех. поддержку. После получения письма:<br>
                    1. Добавьте адрес отправителя в контакты<br>
                    2. Если письмо попало в папку «Спам», выделите его и нажмите «Не спам», чтобы в дальнейшем гарантированно получать всю важную информацию по проекту «Общее дело».<br>
                    Не забудьте нажать кнопку "Ок"
                </p>
            </div>
            <div class="col-md-12">
                <div class="button">
                    <a href="/">На главную</a>
                </div>
            </div>
        </div>
    </div>
    
</body>

<?php
//Принимаем постовые данные
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone_number'];
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
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: INFO <admin@website.com>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
exit();
?>

</html>