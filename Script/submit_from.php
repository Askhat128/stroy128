<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Настройка письма
    $to = "askhat.baimagambetov128@gmail.com"; // Email получателя
    $subject = "Новое сообщение с сайта Все для строительства дома";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    $headers = "From: $email";

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Спасибо, $name! Ваше сообщение успешно отправлено.";
    } else {
        echo "К сожалению, произошла ошибка. Пожалуйста, попробуйте позже.";
    }
}
?>
