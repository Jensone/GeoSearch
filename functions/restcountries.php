<?php 
/**
 * Gestion des appels API REST Countries
 * Définition des fonctions
 */

// Récupération de la liste des pays par continent

function listCountriesByContinent($continent) {
    $url = "https://restcountries.com/v3.1/region/$continent"; // URL de l'API
    $json = file_get_contents($url); // Récupération du contenu JSON
    $countries = json_decode($json, true); // Décodage du JSON en tableau associatif PHP
    
    // translation > fra > common
    
    foreach ($countries as $country) {
        echo '<li style="background: url(\'' . $country['flags']['svg'] . '\')">'; // <li> d'ouverture
        echo '<a href="/country.php?cca2=' . $country['cca2'] . '">'  ; // <a> d'ouverture
        echo $country['translations']['fra']['common']; // Nom du pays
        echo '</a>'; // </a> de fermeture
        echo '</li>'; // </li> de fermeture
    }
}

function getCountryByCodeName($cca2) {
    $url = "https://restcountries.com/v3.1/alpha/$cca2"; // URL de l'API
    $json = file_get_contents($url); // Récupération du contenu JSON
    $country = json_decode($json, true); // Décodage du JSON en tableau associatif PHP

    define('COUNTRY', $country); // Retourne le tableau associatif PHP pour utiliser les données dans le front
    // var_dump(COUNTRY);
}
