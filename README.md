Projet Météo

Petit projet réalisé dans le cadre de ma formation DWWM (Développeur Web et Web Mobile), pour pratiquer PHP, les appels API et la manipulation de données JSON.

Description

Affiche la météo actuelle de 5 villes françaises (Paris, Lyon, Marseille, Lille, Bordeaux) à l'aide de l'API OpenWeatherMap.

Technologies utilisées


PHP (natif, sans framework)
API OpenWeatherMap (météo actuelle)
Tailwind CSS
Phosphor Icons


Fonctionnalités


Récupération des données météo en temps réel via l'API
Affichage de la température, description, humidité et vent par ville
Icône météo dynamique selon la condition (soleil, pluie, nuages...)
Actualisation automatique de la page


Installation


Cloner le repo
Créer un fichier .env à la racine avec :


   apiKey=votre_cle_api
   apiUrl=https://api.openweathermap.org/data/2.5/weather


Lancer le projet sur un serveur local (WAMP, MAMP, etc.)


Structure du projet

├── config.php   → charge les variables d'environnement
├── villes.php   → tableau des villes
├── api.php      → fonction d'appel à l'API
└── index.php    → page d'affichage
