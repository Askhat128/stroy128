<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    // Проверка на пустые поля
    if (empty($name) || empty($email) || empty($message)) {
        echo "Пожалуйста, заполните все поля!";
        exit;
    }
    
    // Дополнительная проверка email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Некорректный email!";
        exit;
    }
    
    // Настройки email
    $to = "askhat.baimagambetov128@gmail.com"; // Ваш email
    $subject = "Новое сообщение от $name";
    $body = "Имя: $name\nEmail: $email\nСообщение: $message";
    
    // Заголовки письма
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";
    
    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Произошла ошибка при отправке сообщения. Попробуйте позже.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>
