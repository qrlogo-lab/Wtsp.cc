<?php
echo "<h1>Мой первый PHP-сайт!</h1>";
echo "<p>Сегодня: " . date('d.m.Y H:i') . "</p>";
echo "<p>Версия PHP: " . phpversion() . "</p>";

// Простая проверка ошибок
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? 'не указано';
    echo "<p>Привет, " . htmlspecialchars($name) . "!</p>";
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Ваше имя">
    <button type="submit">Отправить</button>
</form>
