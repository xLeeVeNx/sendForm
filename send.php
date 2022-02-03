<?php
    // Куда отправляем форму
    $to = 'berdyev.damil1@mail.com';

    // Тема письма
    $subject = 'Тема письма';

    // Текст письма
    $message = 'Пользователь' . $_POST['name'] . ' отправил вам письмо:<br />' . $_POST['message'] . '<br />
    Связаться с ним можно по email <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>';

    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Дополнительные заголовки
    $headers .= 'To: Дамиль <example@example.com>' . "\r\n"; // Свое имя и email
    $headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


    // Отправляем
    mail($to, $subject, $message, $headers);
?>
