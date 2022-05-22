<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="style.css">
    <title>Savoir dessiner</title>
</head>

<body>

    <header>

        <div class="container">
            <div class="header_left_content">
                <img src="img/logo_header.svg" alt="Logo du site Savoir dessiner">

                <nav class="main_menu" role="navigation"">
                        <ul>
                          <li class=" main_subitem"><a href="#atelier">L'atelier online</a></li>
                    <li class="main_subitem"><a href="#rdv">Les RDV coaching</a></li>
                    <li class="main_subitem"><a href="#box">La box</a></li>
                    <li class="a_propos"><a href="#">A propos</a>
                        <ul>
                            <li class="submenu_item"><a href="#">Notre histoire</a></li>
                            <li class="submenu_item"><a href="#">L'équipe</a></li>
                            <li class="submenu_item"><a href="#">Notre démarche</a></li>
                        </ul>
                    </li>
                    </ul>
                </nav>

                <div id="mySidenav" class="sidenav">
                    <a id="closeBtn" href="#" class="close">×</a>
                    <ul>
                        <li class="main_subitem"><a href="#atelier">L'atelier online</a></li>
                        <li class="main_subitem"><a href="#rdv">Les RDV coaching</a></li>
                        <li class="main_subitem"><a href="#box">La box</a></li>
                        <li class="a_propos"><a href="#">A propos</a>
                        </li>
                        <li class="shop_item"><a href="#">Le shop</a></li>
                        <li class="panier_item">
                            <a href="#">Mon panier</a>
                        </li>
                        <li class="connexion_item"><a href="#">Se connecter</a></li>
                        <div class="commencer_container">
                            <a class="btn_commencer" href="#">Commencer</a>
                        </div>
                    </ul>
                </div>

                <a href="#" id="openBtn">
                    <span class="burger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>

            </div>

            <div class="header_right_content">
                <ul class="subnav_menu">
                    <li class="shop_item"><a href="#">Le shop</a></li>
                    <li class="panier_item">
                        <a href="#">Mon panier</a>
                    </li>
                    <li class="connexion_item"><a href="#">Se connecter</a></li>
                    <a href="#" class="btn_commencer">Commencer</a>
                </ul>
            </div>
        </div>

    </header>

    <section class="hero">

        <div class="container">
            <div class="hero_left_content">
                <p>L'atelier online</p>
                <h1>Apprenez le dessin et la peinture depuis chez vous</h1>
                <div class="hero_btn_container">
                    <a href="#">s'inscrire gratuitement</a>
                </div>
            </div>
            <div class="hero_right_content">
                <img src="img/img_hero.png" alt="une miniature d'une vidéo">
            </div>

        </div>

    </section>

    <section class="school">
        <div class="container">
            <h2>Votre école d'art en accès libre et illimité.</h2>
            <div class="school_card_container">
                <article>
                    <img src="img/picto_carte.svg" alt="pictogramme de carte">
                    <h3>À la carte</h3>
                    <p class="article_desc">+ de 150 heures de cours accessibles où vous voulez, quand vous voulez.</p>
                </article>
                <article>
                    <img src="img/picto_accessible.svg" alt="pictogramme d'un bouton play">
                    <h3>Accessible à tous</h3>
                    <p class="article_desc">Débutants comme confirmés, nos cours vous accompagnent pas à pas dans toutes
                        vos envies.</p>
                </article>
                <article>
                    <img src="img/picto_engagement.svg" alt="pictogramme d'un pousse">
                    <h3>Sans engagement</h3>
                    <p class="article_desc">Vous êtes libres d’annuler votre abonnement à tout moment&nbsp;!</p>
                </article>
            </div>
        </div>
    </section>

    <section class="class">
        <div class="container">
            <div class="class_intro">
                <?php

                ?>
                <h2>Découvrez et créez, tout simplement.</h2>
                <p class="class_desc">Des centaines de cours et live à la difficulté progressive pour maitriser les
                    bases, affirmer sa pratique et développer une approche personnelle du dessin.</p>
            </div>

            <?php

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $curl_response = curl_exec($ch);

        // Décoder les objets pour récupérer les propriétés
        $posts = json_decode($curl_response, true);
    
        // close curl resource to free up system resources
        curl_close($ch);      
    ?>

            <div class="class_cards">
                
                <?php 
                $filtered_posts = array_filter($posts, function ($post) { return str_contains($post['title'], 'lorem' ); });
                foreach($filtered_posts as $post) { ?>

                <article class="card">
                    <img src="img/portrait.png" alt="dessin représentant un portrait" srcset="img/portrait_2x.png"
                        class="cours_card_img">
                    <div class="card_info">
                        <p class="level">Tous niveaux</p>
                        <p class="time">7h</p>
                        <p class="number_class">11 cours</p>
                    </div>
                    <h4 class="title_class"><?php echo $post['title'] ?></h4>
                    <p class="class_excerpt"><?php echo $post['body'] ?>
                    </p>
                    <a href="#" class="btn_class">Commencer</a>
                </article>
                <?php }  ?>

                <!-- <article class="card">
                    <img src="img/header-paysage-pastel-panorama.png" alt="dessin représentant un paysage"
                        srcset="img/header-paysage-pastel-panorama@2x.png" class="cours_card_img">
                    <div class="card_info">
                        <p class="level">Tous niveaux</p>
                        <p class="time">7h</p>
                        <p class="number_class">11 cours</p>
                    </div>
                    <h4 class="title_class">Le paysage au pastel</h4>
                    <p class="class_excerpt">Apprenez à réaliser de superbes paysages au pastel gras avec Maxime et
                        Nathan&nbsp;!</p>
                    <a href="#" class="btn_class">Commencer</a>
                </article>

                <article class="card">
                    <img src="img/carnet-panorama.png" srcset="img/carnet-panorama@2x.png"
                        alt="dessin représentant une rue" class="cours_card_img">
                    <div class="card_info">
                        <p class="level">Tous niveaux</p>
                        <p class="time">7h</p>
                        <p class="number_class">11 cours</p>
                    </div>
                    <h4 class="title_class">Autour du carnet de voyage</h4>
                    <p class="class_excerpt">Apprenez à dessiner en toute liberté et à réaliser des carnets de voyages
                        remplis de vie&nbsp;!</p>
                    <a href="#" class="btn_class">Commencer</a>
                </article> -->
            </div>
            <div class="class_btn_container">

                <a href="#" class="all_class">Voir tous les cours</a>
            </div>
        </div>
    </section>

    <section class="sens">
        <div class="container">
            <div class="sens_left_content">
                <img src="img/img_sens.png" srcset="img/img_sens_2x.png"
                    alt="Image représentant une personne qui dessine">
            </div>
            <div class="sens_right_content">
                <h2>Explorez vos sens artistiques</h2>
                <hr class="separateur_image">
                <p class="sens_desc">Quelque soit votre niveau, découvrez des centaines de cours accessibles partout, à
                    tout moment. Pour vous exercer pas à pas en dessin et en peinture, à votre rythme.</p>
                <div class="btn_techniques_container">
                    <a href="#" class="sens_btn">Démarrer les cours en ligne</a>
                </div>
            </div>

        </div>
    </section>

    <section class="techniques">
        <div class="container">
            <div class="techniques_left_content">
                <h2>Découvrez toutes les techniques</h2>
                <hr class="separateur_image">
                <p class="techniques_desc">Laissez vous guider exercice par exercice, conseil par conseil, pour
                    découvrir et pratiquer toutes les disciplines du dessin et de la peinture.</p>
                <div class="btn_techniques_container">
                    <a href="#" class="techniques_btn">je m'abonne</a>
                </div>

            </div>
            <div class="techniques_right_content">
                <img src="img/trousse.png" srcset="img/trousse_2x.png" alt="Image représentant une trousse">
            </div>

        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer_left_content">
                <img class="footer_logo" src="img/Logo_SD.svg" alt="Logo savoir dessiner">
                <a href="mailto:info@savoirdessinerparis.fr">info@savoirdessinerparis.fr</a>
                <div class="footer_social_container">
                    <a href="#"><img src="img/picto_insta.svg" alt="pictogramme d'instagram"></a>
                    <a href="#"><img src="img/picto_facebook.svg" alt="pictogramme de facebook"></a>
                    <a href="#"><img src="img/picto_pinterest.svg" alt="pictogramme de pinterest"></a>
                    <a href="#"><img src="img/picto_youtube.svg" alt="pictogramme de youtube"></a>
                </div>
            </div>
            <div class="footer_adress_container">
                <div class="commerce">
                    <p class="commerce_title">Atelier Commerce</p>
                    <p class="footer_adress_text">8 rue de l'Abbé Groult, 75015 Paris</p>
                    <p class="footer_adress_phone">06 65 30 88 59</p>
                </div>
                <div class="vaugirard">
                    <p class="vaugirard_title">Atelier Vaugirard</p>
                    <p class="footer_adress_text">2 rue Petel, 75015 Paris, 75015 Paris</p>
                    <p class="footer_adress_phone">06 65 30 88 59</p>
                </div>
                <div class="saint_ambroise">
                    <p class="saint_ambroise_title">Atelier Saint-Ambroise</p>
                    <p class="footer_adress_text">73 boulevard Voltaire, 75011 Paris</p>
                    <p class="footer_adress_phone">06 60 75 77 73</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/burger.js"></script>
</body>

</html>