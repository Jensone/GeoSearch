<?php
/**
 * Page d'un pays
 * Récupération du paramètre GET cca2 (code pays) dans l'URL
 * Formulaire de recherche de pays via le paramètre GET cca2 (code pays)
 */
require 'functions/restcountries.php';
include 'partials/_head.html.php'; 

// Traitement du formulaire

if($_SERVER["REQUEST_METHOD"] == "POST") // Vérifie que la requête est bien en POST
{
    $req = $_REQUEST['select-countries'];
    header('Location: country.php?cca2='.$req);
    echo $req;
} else {
    // Récupération du paramètre GET cca2 (code pays) dans l'URL
    if(isset($_GET['cca2'])) 
    {
        $cca2 = $_GET['cca2'];
        getCountryByCodeName($cca2);
    } else {
        echo 'Aucun pays sélectionné';
    }

    define('NAME', COUNTRY[0]['translations']['fra']['common'] );
    define('FLAG', COUNTRY[0]['flags']['svg'] );
    define('POPULATION', COUNTRY[0]['population'] );
    define('LANGUAGES', COUNTRY[0]['languages'] );
    define('CAPITAL', COUNTRY[0]['capital'][0] );
}


?>

<form method="post">
    <fieldset>
        <legend>Sélectionnez le pays de votre choix</legend>
        <p>
            <input name="select-countries" list="select-countries" autocomplete="on" required>
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="#ffffff" d="M7 9H2V7h5v2zm0 3H2v2h5v-2zm13.59 7l-3.83-3.83c-.8.52-1.74.83-2.76.83c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L22 17.59L20.59 19zM17 11c0-1.65-1.35-3-3-3s-3 1.35-3 3s1.35 3 3 3s3-1.35 3-3zM2 19h10v-2H2v2z"/></svg>
            </button>
        </p>
    </fieldset>
    <datalist id="select-countries" class="select-countries">
        <option value=""></option>
    </datalist>
</form>


<section class="country">
    <?php
        if(null !== FLAG) {
            echo '<img src="' . FLAG . '" alt="Population ' . NAME . '">';
        }
    ?>
    <div>
        <h1 class="big-text m-0">
            <?php
                if(null !== NAME) {
                    echo NAME;
                }
            ?>
        </h1>
        <ul>
            <li>
                <?php 
                    if(null !== POPULATION) {
                        echo '<img src="/assets/img/users.svg" alt="Population ' . NAME . '">';
                        echo '<p class="population-count">' . POPULATION . '</p>';
                    }
                ?>
            </li>
            <li>
                <?php 
                    if(null !== LANGUAGES) {
                        echo '<img src="/assets/img/languages.svg" alt="Langue ' . NAME . '">';
                        foreach( LANGUAGES as $language) {
                            echo $language . ' ';
                        }
                    }
                ?>
                </p>
            </li>
            <li>
                <?php 
                    if(null !== CAPITAL) {
                        echo '<img src="/assets/img/capital.svg" alt="Capital ' . NAME . '">';
                        echo '<p>' . CAPITAL . '</p>';
                    }
                ?>
            </li>
        </ul>
    </div>
</section>

<section>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi at expedita recusandae? Velit reiciendis culpa, possimus obcaecati debitis blanditiis praesentium fugit, suscipit amet natus ipsa officia numquam! Corrupti, mollitia quibusdam beatae voluptatem esse voluptates quia ducimus vitae? Vitae, mollitia maiores qui architecto reiciendis optio maxime officiis deleniti dolorum aliquam repudiandae asperiores blanditiis ducimus eos est perferendis, accusantium hic esse eum explicabo fugit possimus autem! Sint ullam dolore non nisi officia eveniet labore veritatis doloremque quos! Vel voluptatem accusantium necessitatibus ab itaque. Provident dolorem quas reprehenderit fugiat consectetur! Hic in, atque quisquam, ad quidem dolores molestiae suscipit eum inventore, ratione necessitatibus dolorem. Totam vitae dolorem nesciunt optio obcaecati veniam earum debitis, neque unde atque quia rerum ut sapiente. Illo explicabo tempore reprehenderit et? Cupiditate dicta optio ducimus commodi ipsam distinctio, in neque fugit minus hic porro alias iure at consequuntur consectetur recusandae modi? Corrupti deleniti, molestiae odit accusantium aspernatur sequi officiis atque unde animi mollitia eligendi incidunt, assumenda sed voluptates, officia expedita ipsam repudiandae blanditiis qui soluta illo. Temporibus adipisci ipsum laudantium, corrupti vero aliquam iure debitis? Nihil voluptas odio repellat ullam earum cupiditate vel omnis iusto explicabo cum eaque modi unde, voluptate dolorem dolorum deleniti vero ipsum, at fuga. Praesentium.</p>
</section>

<?php include 'partials/_footer.html.php'; ?>