<?php
echo "<h1 style='color: green;'>✅ PHP на Railway работает!</h1>";
echo "<p>Серверное время: " . date('Y-m-d H:i:s') . "</p>";

// Проверка функций PHP
$checks = [
    'PHP Version' => phpversion(),
    'GD Library' => extension_loaded('gd') ? '✅ Установлена' : '❌ Отсутствует',
    'MySQLi' => extension_loaded('mysqli') ? '✅ Установлен' : '❌ Отсутствует',
    'JSON' => extension_loaded('json') ? '✅ Установлен' : '✅ Установлен',
    'Время работы' => round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 3) . ' сек'
];

echo "<h2>Информация о сервере:</h2>";
echo "<ul>";
foreach ($checks as $name => $value) {
    echo "<li><strong>$name:</strong> $value</li>";
}
echo "</ul>";

// Простая форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $test = $_POST['test_input'] ?? '';
    echo "<p style='color: blue;'>Вы отправили: <strong>" . htmlspecialchars($test) . "</strong></p>";
}
?>

<form method="POST" style="margin-top: 20px; padding: 15px; background: #f0f0f0;">
    <input type="text" name="test_input" placeholder="Введите текст для теста">
    <button type="submit" style="background: #4CAF50; color: white; padding: 5px 15px; border: none;">
        Проверить POST-запрос
    </button>
</form>

<p style="margin-top: 20px; color: #666;">
    <small>Этот сайт автоматически развернут с GitHub на Railway.app</small>
</p>
