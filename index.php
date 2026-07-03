<?php
require_once "config.php";
require_once "villes.php";
require_once "api.php";

$total = [];
foreach ($villes as $n) {
    $data = getMeteo($apiKey, $apiUrl, $n["lat"], $n["lon"]);
    if ($data !== null) {
        $total[] = $data;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/output.css">
    <meta http-equiv="refresh" content="600">
    <title>Projet Météo</title>
</head>
<body class="bg-slate-900">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-slate-100 mb-8">Météo de 5 villes</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <?php foreach ($total as $ville) : ?>
                <div class="bg-slate-800 rounded-xl p-5 text-center">
                    <h2 class="text-xl font-semibold text-slate-100 mb-1"><?php echo $ville["name"]; ?></h2>


                    <p class="text-4xl font-bold text-amber-400 mb-2">
                        <?php echo round($ville["main"]["temp"]); ?>°C
                    </p>
                    <p class="text-slate-400 mb-4"><?php echo ucfirst($ville["weather"][0]["description"]); ?></p>
                    <div class="text-sm text-slate-500">
                        <p>Humidité : <?php echo $ville["main"]["humidity"]; ?>%</p>
                        <p>Vent : <?php echo round($ville["wind"]["speed"] * 3.6); ?> km/h</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>