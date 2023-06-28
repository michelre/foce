<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        <video class="banner-video" autoplay muted loop poster="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/header-video.mp4'; ?>" type="video/mp4">
        </video>
    </section>
    <section id="#story" class="story">
        <h2><span class="title-to-animate">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php  get_template_part('template-parts/characters-slide') ?>
        <article id="place">
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
                <img class=" cloud big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="big cloud">
                <img class=" cloud little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="little cloud">
            </div>

        </article>
    </section>


    <section id="studio">
        <h2><span class="title-to-animate">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <section id="oscar-nomination">
        <div>
            <div class="oscar-title-container">
                <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/18-courts-metrages-francais-d-animation-eligibles-aux-oscars.png" ?>" alt="Nomination aux Oscars - Koukaki">
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
