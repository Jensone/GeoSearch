<?php
/**
 * Page d'un pays
 * Récupération du paramètre GET cca2 (code pays) dans l'URL
 * Formulaire de recherche de pays via le paramètre GET cca2 (code pays)
 */
require 'functions/restcountries.php';
include 'partials/_head.html.php'; 

// Récupération du paramètre GET cca2 (code pays) dans l'URL
if(isset($_GET['cca2'])) {
    $cca2 = $_GET['cca2'];
    getCountryByCodeName($cca2);
} else {
    echo 'Aucun pays sélectionné';
}

?>

<section class="country">
    <img src="<?php echo COUNTRY[0]['flags']['svg'] ?>" alt="<?php echo COUNTRY[0]['flags']['alt'] ?>">
    <div>
        <h1 class="big-text"><?php echo COUNTRY[0]['translations']['fra']['common'] ?></h1>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256"><path fill="currentColor" d="M244.8 150.4a8 8 0 0 1-11.2-1.6A51.6 51.6 0 0 0 192 128a8 8 0 0 1-7.37-4.89a8 8 0 0 1 0-6.22A8 8 0 0 1 192 112a24 24 0 1 0-23.24-30a8 8 0 1 1-15.5-4A40 40 0 1 1 219 117.51a67.94 67.94 0 0 1 27.43 21.68a8 8 0 0 1-1.63 11.21ZM190.92 212a8 8 0 1 1-13.84 8a57 57 0 0 0-98.16 0a8 8 0 1 1-13.84-8a72.06 72.06 0 0 1 33.74-29.92a48 48 0 1 1 58.36 0A72.06 72.06 0 0 1 190.92 212ZM128 176a32 32 0 1 0-32-32a32 32 0 0 0 32 32Zm-56-56a8 8 0 0 0-8-8a24 24 0 1 1 23.24-30a8 8 0 1 0 15.5-4A40 40 0 1 0 37 117.51a67.94 67.94 0 0 0-27.4 21.68a8 8 0 1 0 12.8 9.61A51.6 51.6 0 0 1 64 128a8 8 0 0 0 8-8Z"/></svg>
                <p>
                    <?php echo COUNTRY[0]['population'] ?>
                </p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256"><path fill="currentColor" d="M36.08 43.37A6 6 0 0 0 34 47.9V216a6 6 0 0 0 12 0v-45.22c28.08-22.79 51.88-11 79.34 2.57c16.12 8 33.49 16.58 52 16.58c13.57 0 27.76-4.6 42.56-17.42A6 6 0 0 0 222 168V47.9a6 6 0 0 0-9.93-4.54c-29 25.12-53.28 13.09-81.41-.84c-27.89-13.81-59.66-29.36-94.58.85ZM210 165.17c-28.08 22.8-51.88 11-79.34-2.58C105.4 150.08 77.09 136.07 46 156V50.72c28.08-22.8 51.88-11 79.34 2.56C150.6 65.79 178.91 79.8 210 59.91Z"/></svg>
                <p>
                    <?php 
                        foreach(COUNTRY[0]['languages'] as $language) {
                            echo $language . ' ';
                        }
                    ?>
                </p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256"><path fill="currentColor" d="M237.47 70.71a11.18 11.18 0 0 0-9.73-7.71l-38.43-3.25l-15-35a11.24 11.24 0 0 0-20.63 0l-15 35L100.27 63a11.12 11.12 0 0 0-6.36 19.54L123 107.38l-8.72 36.92a11.09 11.09 0 0 0 4.26 11.5a11.23 11.23 0 0 0 12.42.6l33-19.64l33.05 19.64a11.22 11.22 0 0 0 12.42-.6a11.07 11.07 0 0 0 4.25-11.5L205 107.38l29.08-24.83a11.08 11.08 0 0 0 3.39-11.84Zm-40.66 27.9a11.05 11.05 0 0 0-3.61 11l8.39 35.55l-31.83-18.92a11.23 11.23 0 0 0-11.52 0l-31.82 18.92l8.38-35.56a11 11 0 0 0-3.6-11l-27.89-23.81l36.85-3.12a11.2 11.2 0 0 0 9.37-6.74L164 31.17l14.48 33.76a11.19 11.19 0 0 0 9.36 6.74l36.86 3.12ZM84.24 124.24l-56 56a6 6 0 0 1-8.48-8.48l56-56a6 6 0 0 1 8.48 8.48Zm16 47.52a6 6 0 0 1 0 8.48l-56 56a6 6 0 0 1-8.48-8.48l56-56a6 6 0 0 1 8.48 0Zm72 0a6 6 0 0 1 0 8.48l-56 56a6 6 0 0 1-8.48-8.48l56-56a6 6 0 0 1 8.49 0Z"/></svg>
                <p>
                    <?php echo COUNTRY[0]['capital'][0] ?>
                </p>
            </li>
        </ul>
    </div>
</section>

<section>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi at expedita recusandae? Velit reiciendis culpa, possimus obcaecati debitis blanditiis praesentium fugit, suscipit amet natus ipsa officia numquam! Corrupti, mollitia quibusdam beatae voluptatem esse voluptates quia ducimus vitae? Vitae, mollitia maiores qui architecto reiciendis optio maxime officiis deleniti dolorum aliquam repudiandae asperiores blanditiis ducimus eos est perferendis, accusantium hic esse eum explicabo fugit possimus autem! Sint ullam dolore non nisi officia eveniet labore veritatis doloremque quos! Vel voluptatem accusantium necessitatibus ab itaque. Provident dolorem quas reprehenderit fugiat consectetur! Hic in, atque quisquam, ad quidem dolores molestiae suscipit eum inventore, ratione necessitatibus dolorem. Totam vitae dolorem nesciunt optio obcaecati veniam earum debitis, neque unde atque quia rerum ut sapiente. Illo explicabo tempore reprehenderit et? Cupiditate dicta optio ducimus commodi ipsam distinctio, in neque fugit minus hic porro alias iure at consequuntur consectetur recusandae modi? Corrupti deleniti, molestiae odit accusantium aspernatur sequi officiis atque unde animi mollitia eligendi incidunt, assumenda sed voluptates, officia expedita ipsam repudiandae blanditiis qui soluta illo. Temporibus adipisci ipsum laudantium, corrupti vero aliquam iure debitis? Nihil voluptas odio repellat ullam earum cupiditate vel omnis iusto explicabo cum eaque modi unde, voluptate dolorem dolorum deleniti vero ipsum, at fuga. Praesentium.</p>
</section>

<?php include 'partials/_footer.html.php'; ?>