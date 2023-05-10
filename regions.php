<?php

/**
 * Page d'un pays
 * Récupération du paramètre GET cca2 (code pays) dans l'URL
 * Formulaire de recherche d'un continent via le paramètre GET cca2 (code pays)
 */
require 'functions/restcountries.php';
include 'partials/_head.html.php';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") // Vérifie que la requête est bien en POST
{
    $req = $_REQUEST['select-region'];
    header('Location: regions.php?name=' . $req);
}

?>

<form method="post">
    <fieldset>
        <legend>Sélectionnez le continent</legend>
        <p>
            <input name="select-region" list="select-region" autocomplete="on" required>
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="#ffffff" d="M7 9H2V7h5v2zm0 3H2v2h5v-2zm13.59 7l-3.83-3.83c-.8.52-1.74.83-2.76.83c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L22 17.59L20.59 19zM17 11c0-1.65-1.35-3-3-3s-3 1.35-3 3s1.35 3 3 3s3-1.35 3-3zM2 19h10v-2H2v2z" />
                </svg>
            </button>
        </p>
    </fieldset>
    <datalist id="select-region" class="select-region">
        <option value="africa">Afrique</option>
        <option value="europe">Europe</option>
        <option value="asia">Asie</option>
        <option value="america">Amériques</option>
        <option value="oceania">Océanie</option>
        <option value="antarctic">Antarctique</option>
    </datalist>
</form>

<section class="regions">
    <h1 class="big-text" style="text-transform: Capitalize;">
        <?php
            if (isset($_GET['name'])) {
                echo $_GET['name'];
            }
        ?>
    </h1>
    <hr>
    <ul class="countries">
        <?php
            if (isset($_GET['name'])) {
                listCountriesByRegion($_GET['name']);
            }
        ?>
    </ul>
</section>

<?php include 'partials/_footer.html.php'; ?>