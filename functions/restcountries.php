<?php

/**
 * Gestion des appels API REST Countries
 * Définition des fonctions
 */

// Endpoint principal de l'API
define('RESTCOUNTRIES', 'https://restcountries.com/v3.1/');

// Fonction de traitement du résultat de la requête API
function decodeJson($url)
{
    $json = file_get_contents($url); // Récupération du contenu JSON
    $items = json_decode($json, true); // Décodage du JSON en tableau associatif PHP
    return $items; // Retourne le tableau associatif PHP
}

// Fonction pour afficher les pays d'un continent 
function listCountriesByRegion($region)
{
    $url = RESTCOUNTRIES . 'region/' . $region; // URL de l'API
    $countries = decodeJson($url);
    foreach ($countries as $country) {
        echo '<li style="background: url(\'' . $country['flags']['svg'] . '\')">'; // <li> d'ouverture
        echo '<a href="/country.php?cca2=' . $country['cca2'] . '">'; // <a> d'ouverture
        echo $country['translations']['fra']['common']; // Nom du pays
        echo '</a>'; // </a> de fermeture
        echo '</li>'; // </li> de fermeture
    }
}

// Fonction pour récupérer un pays via son code cca2
function getCountryByCodeName($cca2)
{
    $url = RESTCOUNTRIES . '/alpha/' . $cca2; // URL de l'API
    $country = decodeJson($url);
    define('COUNTRY', $country);
}


// Fonction pour compter le nombre total de pays
function getTotalCountries()
{
    $url = RESTCOUNTRIES . 'all';
    $countries = decodeJson($url);
    $total = count($countries);

    define('TOTAL', $total);
}