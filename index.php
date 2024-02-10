<?php require("script.php"); ?>
<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']) || empty($_POST['nom'])){
            $response = "All fields are required";
        }else{
            $response = sendMail($_POST['email'], $_POST['subject'], $_POST['message'], $_POST['nom']);
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <!---------header---------->
    <header>
        <a href="#" class="logo"><img src ="images/Capture_d_écran_2023-02-23_234837-removebg-preview-removebg-preview.png"></a>
        <div class="bx bx-menu" id="menu_icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projet">Projet</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="file/cv_samantha.pdf" class="top-btn">Telecharger cv</a>
    </header>

      <!---------home---------->

      <section class="home" id="home">
        <div class="home-text">
            <h3>Bonjour, Je m'appelle</h3>
            <h1>Samantha Thiebaut</h1>
            <h5>Developpeuse web <span> Depuis Paris</span></h5>
            <p>Je suis Developpeuse web à Paris, je suis très passionée <br> et 
            je travaille actuellement chez <a href="https://www.innosys.fr">Innosys.</a></p>
            <div class="social">
                <a href="https://github.com/samantha-eva"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/samantha-thiebaut-85b440198/"><i class="bx bxl-linkedin"></i></a>
            </div>
            <a href="" class="btn">A propos de moi</a>
        </div>

        <div class="home-img">
            <img src="images/main-removebg-preview.png">
        </div>
      </section>


      <!---------services---------->

      <section class="sub-service">
        <button id="btnScroll">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAYAAACMRWrdAAAAAXNSR0IArs4c6QAAAatJREFUaEPt1+FRBCEMBeB3FWgJdqAdqJ3Ygh3YgS3YidqBdmAJ2oHzZsiM4gGBkOXcyf68A5YvL8fuHbDT67BTFwL235KNxCKxE6lAtOKJBKHeRiSmLlV54FX66m3CWs0ltkqMqOe0m1sA7rgtYII6T7BPAO44b1iOkhZyx3nCSqhNcF6wFsod5wHTolxxs2G9KDfcTNgoygU3C1ZCfQF4APCYPVHv0+dn2efTTssZsBrqBgCfX/JwFgefY0S8AHDBWWEtFN8wiDsGI4rzXXAWmAbFhGowfu+CG4VpURqYC24E1oPSwqbjRmD8TVxnpxlPP7bcsbf2Viv+XKrUlq9p/ebfFRkwAuMpR9xlWqSG6klM9pTj3hOKp6j6GoFxccFdVJKSTfQkluM+RlBcZBQmOMJafxpHYPKbI6wrKUsrqtshDRyF9d7n13hLYtobB0xbKc24SExTpcKYaEVD8f5MjVY0VDNa0VC8aMWZxdttK/J98i6r1BMAvge6XVucim6bry0csCVlN9w0EjMUb8nUSGxJ2Q03jcQMxVsyNRJbUnbDTSMxQ/GWTP0GTmB4N7OyfnkAAAAASUVORK5CYII="/>


        </button>
        <div class="items">
            <div class="sub-box">
                <div class="sub_img">
                    <img src="images/bureau.png">
                </div>
                <h3>Conception et développement de sites web</h3>
                <p>En tant que concepteur et développeur web passionné, je suis déterminé à créer des expériences en ligne mémorables et fonctionnelles pour répondre à vos besoins spécifiques.</p>

            </div>

            <div class="sub-box">
                <div class="sub_img">
                 <img src="images/hebergement.png">
                
                </div>
                <h3>Conception de bases de données</h3>
                <p>Chaque projet commence par une modélisation minutieuse de la base de données. Je collabore étroitement avec vous pour comprendre les exigences spécifiques de votre domaine d'activité.</p>

            </div>

            <div class="sub-box">
                <div class="sub_img">
                  
                <img src="images/analyses-daudience-internet.png">
                </div>
                <h3>analyser vos besoins en matière de développement web</h3>
                <p>Les développeurs web peuvent évaluer les besoins d'une entreprise en matière de développement web en analysant ses objectifs, ses besoins en termes de fonctionnalités, ses exigences en matière de sécurité et de performance, et les contraintes techniques.</p>

            </div>

        </div>

      </section>

        <!---------About---------->
        <section  class="about" id ="about">
            <div class="about-img">
                <img src="images/about.png">
            </div>

            <div class="about-text">
                <h3>Je suis Developpeuse web</h3>
                <h2>Je favorise la création de code qui rend un site web fonctionnel et utilisable</h2>
                <p>Bonjour!, je sus developpeur web, et je suis une grande passionée de progammation.j'ai 2 ans experience profession. J'ai acquis de nombreuses compétences qui sont néccesaire a la conception d'un projet avec succes.
                    J'aime travaillé en équipe et surtout j'apprends tous les jours.
                </p>
                <br>
                <a href="" class="btn">Engagez-moi</a>
            </div>

        </section>


        <!---------projet---------->
         <section class="projet" id="projet">
            <div class="heading">
                <h3>Projet</h3>
                <h2>Mes differents Projets</h2>
                <p>Bienvenue dans la section dédiée à mes projets, où chaque ligne de code, chaque concept créatif et chaque problème résolu trouve son refuge. Cette collection représente mon parcours passionné à travers divers domaines, mettant en lumière ma polyvalence et mon engagement envers l'excellence.</p>
            </div>

            <div class="projet-content">
                <div class="col">
                    <img src="images/assurmix.png">
                    <div class="layer">
                        <h3>Assurmix</h3>
                        <h5>assurance</h5>
                    </div>
                </div>

                <div class="col">
                    <img src="images/econick.png">
                    <div class="layer">
                        <h3>Econick</h3>
                        <h5>envrionnement</h5>
                    </div>
                </div>

                <div class="col">
                    <img src="images/oeuvre-des-campagnes.png">
                    <div class="layer">
                        <h3>ODC</h3>
                        <h5>relifgion</h5>
                    </div>
                </div>
                
            </div>
         </section>

          <!---------SERVICES---------->
          <section class="service" id="service">
            <div class="heading">
                <h3> Mes services</h3>
                <h2> Les services proposés pour mener a bien votre projet.</h2>
                <p>Bienvenue dans la section "Services" où je mets à votre disposition mes compétences spécialisées en bases de données, ainsi que dans le développement web couvrant HTML, CSS, JavaScript, et les frameworks PHP.<p>
            </div>

            <div class="service-content">
                <div class="row">
                    <div class="s s-one">
                        <img src="images/html_css_js.png">
                    </div>
                        <h3>HTML /CSS /JS </h3>
                        <h5>Langage de programmation de scripts </h5>
                        <p>Mon expertise en développement front-end s'étend sur HTML, CSS et JavaScript. Je crée des interfaces utilisateur interactives et attrayantes, assurant une expérience utilisateur fluide et moderne. Chaque ligne de code est écrite avec soin pour garantir la compatibilité multiplateforme et une navigation intuitive.</p>
                </div>
                <div class="row">
                    <div class="s s-two">
                        <img src="images/php.png">
                    </div>
                        <h3>PHP</h3>
                        <h5>Langage de programmation libre </h5>
                        <p>Une plateforme robuste pour la création d'applications web dynamiques et performantes. En tant que développeur spécialisé dans le langage PHP, je propose une expertise approfondie dans la conception, le développement et la maintenance d'applications web puissantes et évolutives.</p>
                </div>
                <div class="row">
                    <div class="s s-three">
                        <img src="images/framework.png">
                    </div>
                        <h3>Laravel/Symfony</h3>
                        <h5>Framework</h5>
                        <p>Maîtrisant des frameworks tels que Laravel et Symfony, je crée des applications PHP modulaires et structurées. Ces frameworks fournissent une base solide pour le développement rapide et efficace, tout en respectant les meilleures pratiques de l'industrie.</p>
                </div>
                <div class="row">
                    <div class="s s-four">
                        <img src="images/database.png">
                    </div>
                        <h3>MySQL / MongoDB</h3>
                        <h5>Base de données</h5>
                        <p>Maîtrisant l'art de la conception de bases de données, je suis votre expert dédié pour créer des structures de données optimisées et évolutives.</p>
                </div>
            </div>
          </section>

           <!---------Contact---------->

           <section class="contact" id="contact">
            <div class="container">
                <div class="center">
                    <h3>Contactez moi</h3>
                    <p>N'hesite pas a me poser vos questions par mail </p>
                </div>
                <div class="action">
                    <form action="" method="POST">
                        <input type="text" name="nom" placeholder="Entrez votre nom" required>
                        <input type="text" name="subject" placeholder="Subject" required>
                        <input type="email" name="email" placeholder="Entrez votre adresse mail" required>
                        <textarea id="message" name="message" rows="5" cols="33"  required>Entrez votre message.</textarea>
                        <input type="submit" name="submit" value="envoyer">
                        <?php
                        if(@$response == 'success'){
                            ?>
                            <p class="success">Email envoyé</p>
                            <?php 
                        }else{
                            ?>
                             <p class="error"><?php echo @$response; ?></p>
                             <?php
                        }
                        ?>
                    </form>
                </div>
                </div>

            </div>
           </section>

             <!---------footer---------->

             <div class="footer">
                <p>Copyright © 2024  Tous droits réservés  à ST Developpeuse web.</p>
             </div>

            







<!---Link to js--------------------->
    <script type="text/javascript" src="js/script.js"></script>

    
</body>
</html>