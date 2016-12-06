<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
    <title> Mathieu Harribey | Etudiant en Developpement Web</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/form.css">
    <link rel="publisher" href="https://plus.google.com/u/0/108732331168630823318" />
    <link rel="canonical" href="http://www.mathieuharribey.fr/" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@matharribey">
    <meta name="twitter:title" content="Mathieu Harribey">
    <meta name="twitter:description" content="Venez retrouver toutes les informations sur Mathieu Harribey ! Ici, vous aurez accès à son portfolio, ses compétences ainsi qu'à ses informations de contact!">
    <meta name="twitter:image" content="http://mathieuharribey.fr/images/projets/mh_black.png">
    <meta name="twitter:image:alt" content="Mathieu Harribey, le Portfolio.">

    <meta property="og:title" content="Mathieu Harribey">
    <meta property="og:type" content="Web Developper">
    <meta property="og:url" content="https://mathieuharribey.fr/">
    <meta property="og:image" content="http://mathieuharribey.fr/images/projets/mh_black.png">
    <meta property="og:description" content="Venez retrouver toutes les informations sur Mathieu Harribey ! Ici, vous aurez accès à son portfolio, ses compétences ainsi qu'à ses informations de contact!">
    <meta property="og:email" content="contact@mathieuharribey.fr">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Retrouvez toutes les informations à de Mathieu Harribey sur son site professionnel ! Ici, vous avez accès à mes compétences, les différents projets que j'ai réalisé ainsi que mes coordonnés.">
    <meta name="Keywords" content="mathieu, harribey, site, perso, pro, professionnel ,cv, projets, compétences, contact, mmi, iut, dut, development, developpement, web, internet, formation, design, études, portfolio, course en cours, doolt, lppb,isn">
    <meta name="Subject" content="Portfolio">
    <meta name="Copyright" content="Mathieu Harribey">
    <meta name="Author" content="Mathieu Harribey">
    <meta name="Identifier-Url" content="www.mathieuharribey.fr">
    <meta name="Revisit-After" content="15 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="Bordeaux">
    <meta name="Category" content="internet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>


<body>
    <?php
      if(isset($_SESSION["notice"])){
    ?>
    <div id="noticeContainer">
    <?= $_SESSION["notice"] ?>
    </div>
    <?php
        unset($_SESSION["notice"]);
      }
    ?>

    <header>
        <div id="loader"></div>

        <div id="bloc" class='bloc'>
            <div id="first-bloc">
                <h1 id="name"> Mathieu Harribey </h1>
                <h2 id="title"> Etudiant en Developpement Web </h2>
                <a href="#bloc2"><img src="images/arrow.png" id="arrow" alt='arrow' /></a>
            </div>
        </div>

    </header>

    <section>

        <div id="main-nav" class="navbar bg-transparent navbar-container">
            <p class='navbar-content' style='padding:0 20px;'>
                <a href='#bloc' class='blocAction'><img src='images/projets/mh_black.png' id='logo' alt='logo' /></a>
            </p>
            <p class="navbar-content"><a href='#bloc2' class="blocAction">A propos</a></p>
            <p class="navbar-content"><a href='#bloc4' class="blocAction">Competences</a></p>
            <p class="navbar-content"><a href='#bloc3' class="blocAction">Portfolio</a></p>
            <p class="navbar-content"><a href='#bloc5' class="blocAction">Contact</a></p>
        </div>

        <!-- About -->
        <div id="bloc2" class="bloc">
            <div class='bloc-content'>
                <img id='photo' src="images/mathieu.jpg" alt="photo profil" />
                <div id="description">
                    <p>Je m’appelle Mathieu HARRIBEY, j’ai 18 ans, je suis étudiant en 1ère Année en DUT MMI à l’Université de Bordeaux Montaigne. J’aime la Programmation et le Développement Web, back comme front. Je passe beaucoup de temps à travailler
                        sur diverses projets, personnels comme professionnels, qui me permettent d’approfondir mes connaissances et d’en apprendre toujours plus.
                        <br/> Dès que j’en ai l’occasion, je fais du sport, de plus j’adore travailler en équipe, et aime que le travail soit bien fait. Sortant d’un BAC S-SI option ISN (Informatique et Sciences du Numérique) obtenu mention Bien, je recherche
                        actuellement des opportunités me permettant d’améliorer mes compétences. Si vous avez une offre, un stage, ou quelque chose répondant à mes critères, n’hésitez pas à <a href="#bloc5"><span>me contacter !</span></a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Formation -->
        <div id="bloc4" class="bloc">
            <div class='bloc-content'>
                <img id="imgDsg" src='images/dsg.png' alt="design" />
                <div id="line"></div>
                <img id="imgDev" src='images/DEV.png' alt="developpement" />
                <div class="texte">
                    J’aime la programmation et le design. <br/> De plus, j’ai eu l’occasion de travailleur en équipe à de nombreuses reprises grâce à beaucoup de projets. Je fais majoritairement du développement web mais j’aime aussi le design et le motion
                    design.
                </div>
            </div>
        </div>

        <!-- Projet -->
        <div id="bloc3" class="bloc">
            <div class="bloc-content">

                <h3> Créations </h3>

                <figure class="project">
                    <img src="images/projets/temple.jpg" alt="isn" />
                    <figcaption> <i> ISN </i> </figcaption>
                    <a href="prj/isn.html"> </a>
                </figure>

                <figure class="project">
                    <img src="images/projets/lppb.jpg" alt="lppb" />
                    <figcaption> <i> LPPB </i> </figcaption>
                    <a href="prj/lppb.html"> </a>
                </figure>

                <figure class="project">
                    <img src="images/projets/mat_h.jpg" alt="mathieu harribey" />
                    <figcaption> <i> Mathieu Harribey </i> </figcaption>
                    <a href="prj/mh.html"> </a>
                </figure>

                <figure class="project">
                    <img src="images/projets/doolt.jpg" alt="doolt" />
                    <figcaption> <i> Doolt </i> </figcaption>
                    <a href="prj/doolt.html"> </a>
                </figure>


            </div>
        </div>

        <!-- Contact -->
        <div id="bloc5" class="bloc">
          <div class="bloc-content">

            <div class="form" id='form-content'>
                <h3 style="padding-top:30px;"> Leave me a note ! </h3>

                <div class="form-style-8">
                    <form method='post' action="traitement.php">
                        <input type="text" name="name" placeholder="Nom" required/>
                        <input type="email" name="email" placeholder="Email" required/>
                        <input type="url" name="site" placeholder="Site" />
                        <textarea placeholder="Message" onkeyup="adjust_textarea(this)" name="message" required></textarea>

                        <input type="submit" value="SEND" id="bouton">
                    </form>
                </div>
            </div>

            <div class='form' id='contact'>
                <h3 style="padding-top:30px;"><span> Contact </span></h3>
                <br/>
                <p> 06 28 46 34 19 </p><br/>
                <p> mathieuharribey@hotmail.fr </p><br/>
                <p> 1 Rue Romy Schneider <br/> 33600 PESSAC </p>
                <br/>
                <a href="images/CV.pdf"><h3>MON CV</h3></a>
            </div>
        </div>

      </div>
    </section>

    <footer>
        <div id="bloc6">
            <h3 style="padding-top:40px;"> Decouvrez en plus sur moi en me suivant sur les reseaux sociaux </h3>
            <div id="social">
                <a href='https://www.facebook.com/mat.harribey'><img class="social-icon" src='images/icons/facebook-hover.png' alt='fb' /></a>
                <a href='https://www.instagram.com/mat.harribey/'><img class="social-icon" src='images/icons/instagram-hover.png' alt='insta' /></a>
                <a href='https://twitter.com/matharribey'><img class="social-icon" src='images/icons/twitter-hover.png' alt='twitter' /></a>
                <a href='https://www.linkedin.com/in/mathieu-harribey-013784129?trk=nav_responsive_tab_profile_pic'><img class="social-icon" src='images/icons/linkedin-hover.png' alt='linkedin' /></a>
            </div>
            <p id="author">Developpement & Design | <span>Mathieu Harribey</span> <br/>  © 2016 - Mathieu Harribey </p>
        </div>
    </footer>

    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
    <script type='text/javascript' src='main.js'></script>

</body>

</html>
