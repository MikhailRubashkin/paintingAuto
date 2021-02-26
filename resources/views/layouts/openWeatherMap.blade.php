<?php
// API ключ
$apiKey = "fe57b721fd47b8600afac45a7829c1ea";
// Город погода которого нужна
$city = "Minsk";
// Ссылка для отправки
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=ru&units=metric&appid=" . $apiKey;

// Создаём запрос
$ch = curl_init();

// Настройка запроса
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// Отправляем запрос и получаем ответ
$data = json_decode(curl_exec($ch));

// Закрываем запрос
curl_close($ch);
?>
