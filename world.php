<?php

require 'functions/restcountries.php';
include 'partials/_head.html.php';

?>

<h1 class="big-text">Tous les pays du monde</h1>

<h2>Une base de données de <?php getTotalCountries(); echo TOTAL ?> pays</h2>
<br>

<!-- L'Europe - Début -->
<div class="continent-subtitle">
    <h3>Europe</h3>
</div>
<ul class="countries">
    <?php listCountriesByRegion('europe'); ?>
</ul>
<!-- L'Europe - Fin -->

<!-- L'Asie - Début -->
<div class="continent-subtitle">
    <h3>Asie</h3>
</div>
<ul class="countries">
    <?php listCountriesByRegion('asia'); ?>
</ul>
<!-- L'Asie - Fin -->

<!-- Les Amériques - Début -->
<div class="continent-subtitle">
    <h3>Amériques</h3>
</div>
<ul class="countries">
    <?php listCountriesByRegion('america'); ?>
</ul>
<!-- Les Amériques - Fin -->

<!-- L'Afrique - Début -->
<div class="continent-subtitle">
    <h3>Africa</h3>
</div>
<ul class="countries">
    <?php listCountriesByRegion('africa'); ?>
</ul>
<!-- L'Afrique - Fin -->

<!-- L'Océanie - Début -->
<div class="continent-subtitle">
    <h3>Océanie</h3>
</div>
<ul class="countries">
    <?php listCountriesByRegion('oceania'); ?>
</ul>
<!-- L'Océanie - Fin -->

<!-- L'Antarctique - Début -->
<div class="continent-subtitle">
    <h3>Antarctique</h3>
</div>
<ul class="countries">
    <?php listCountriesByRegion('antarctic'); ?>
</ul>
<!-- L'Antarctique - Fin -->


<?php include 'partials/_footer.html.php'; ?>