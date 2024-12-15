<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Здесь можно добавить отправку на email или сохранение в базу данных
    echo "Спасибо, $name! Ваше сообщение успешно отправлено.";
}
?>
