<?php
$city = "New York";
$apiKey = "YOUR_API_KEY";
$weatherData = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey"));
$temperature = $weatherData->main->temp - 273.15;
echo "Current temperature in $city: " . round($temperature, 2) . "°C";
?>
