<?php


function getMeteo(string $apiKey, string $apiUrl, float $lat, float $lon) {
   $url = "https://api.openweathermap.org/data/2.5/weather?lat=". $lat ."&lon=". $lon ."&appid=". $apiKey ."&units=metric&lang=fr";
   $reponse = file_get_contents($url);
if ($reponse === false) {
    return null;
} else {
   return  json_decode($reponse, true);
}
}
function weatherIcon($main) {
    if ($main === "Clear") {
        return "ph-sun";
    } elseif ($main === "Clouds") {
        return "ph-cloud";
    } elseif ($main === "Rain" || $main === "Drizzle") {
        return "ph-cloud-rain";
    } elseif ($main === "Thunderstorm") {
        return "ph-cloud-lightning";
    } elseif ($main === "Snow") {
        return "ph-cloud-snow";
    } else {
        return "ph-cloud-fog"; // Mist, Haze, Fog...
    }
}
?>