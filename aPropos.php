<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>A propos</title>

    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/navBar.css" rel="stylesheet" type="text/css">
    <link href="/css/aPropos.css" rel="stylesheet" type="text/css">

    <script src="js/three.js"></script>
    <script src="js/jquery.js"></script>

    <script src="libraries/p5.js" type="text/javascript"></script>


    
</head>
<body>
    <?php include ('includes/nav.php')?>

    <div class = "main">
        <canvas id="bg"></canvas>
        <script src="js/threeJSViewAPropos.js"></script>
        <div class = "centeredMain">
            <div class = "container" id = "first">
                <h1 class="title">A propos de moi</h1>
                <p class = "textBlock">Continuez de scroll pour en apprendre plus sur moi et mon parcours</p>
                <p class = "textBlock">Vous pouvez cliquer <a href="images/CV-update.pdf" download>ici</a> pour télécharger mon CV officiel</p> 

            </div>

            <div class = "container">
                <h1 class="title">A propos de moi</h1>
                <img class="logo" src="images/cvImage.jpeg" alt="moi">

                <p class = "textBlock"> Je m'appelle Thomas Mauran, j'ai 19 ans, je vis à Pérols et j'étudie l'informatique à l'IUT de Montpellier. <br>Passionné d'informatique depuis longtemps, je m'épanouis complètement dans mes études <br>actuelles et je cherche à en apprendre plus dans ce domaine.</p>
            </div>

            <div class = "container">
                <h1 class="title">Mes compétences</h1>

                <li><h2 class = "sousTitle">Front End</h2>
                    <img class = "logo"  src="images/HTML-JS-CSS.jpeg" alt="logo HTML JS CSS">
                    <h2 >Compétences solides en HTML CSS et Javascript</h2>
                    <p class = "textBlock">Très attiré par le web j'ai déjà eu l'occasion de réaliser <br>plusieurs sites que ce soit dans le cadre de ma formation ou en autodidacte</p>
                </li>

                <li><h2 class = "sousTitle">Back End </h2>
                    <img class = "logo"  src="images/php.png" alt="logo php MySql">
                    <h2 >Bonne maitrise de php / mysql</h2>
                    <p class = "textBlock">Ma formation me permet de travailler avec des requetes <br> SQL complexe tout en normalisant les bases de données que j'utilise</p>
                </li>

                <li><h2 class = "sousTitle">React JS</h2>
                    <img class = "logo"  src="images/reactLogo.png" alt="logo react ">
                    <h2 >Novice en react</h2>
                    <p class = "textBlock">Je n'ai pas encore beaucoup d'experience en react car je n'ai pas eu le temps de beaucoup en faire. </p>
                    <p>En effet j'ai commencé une formation sur le react et j'ai déjà appris quelques principes <br>comme le conditionnal rendering, les states, les props. </p>
                    <p>Mais je n'ai pas eu le temps d'aller plus loin à cause d'autres projets en cours.</p>
                    <p>J'ai pu faire quelques projets en react notamment l'application<a target="_blank" rel="noopener noreferrer" href="https://thomasprojects.works/viewProjets/viewSpaceEveryday.php">space everyday</a></p>
                     
                    
                </li>

                <li><h2 class = "sousTitle">Java</h2>
                    <img class = "logo"  src="images/java.jpeg" alt="logo java ">
                    <h2 >Maitrise de java</h2>
                    <p class = "textBlock">L'IUT a choisit JAVA comme langage de programmation principal. <br>C'est avec celui-ci que nous avons apprit <br>la programmation orienté objet et les principes SOLID</p>
                </li>

                <li><h2 class = "sousTitle">Langage bas niveau C</h2>
                    <img class = "logo"  src="images/C.png" alt="logo C ">
                    <h2 >Bonne bases en C</h2>
                    <p class = "textBlock">Le C nous a été enseigné dans le cadre de l'apprentissage de la programmation bas niveau. <br> Cela nous a permit d'apprendre à manipuler <br>les pointeurs, créer des threads, allouer de la mémoire et bien plus ! <br> </p>
                </li>

            </div>

            <div class = "container">
                <h1 class="title">Mon parcours</h1>

                <ul>
                    <li><h2 class = "sousTitle">DUT Informatique</h2>
                    <img class = "logo" id="logoIUT" src="images/logoIUT.jpeg" alt="logo IUT">
                    <p class = "textBlock">DUT informatique | sept 2020 - présent</p>
                    <p class = "textBlock">Actuellement en deuxième année</p>
                    </li>

                    <li><h2 class = "sousTitle">Bac général SVT spécialité mathématiques</h2>
                    <img class = "logo" src="images/logoLamerci.png" alt="logo lamerci">
                    <p class = "textBlock">Lycée la merci littoral | sept 2017 - juin 2020</p>
                    <p class = "textBlock">Bac mention Bien</p>
                    </li>
                </ul>
            </div>

            <div class = "container">
                <h1 class="title">Mes Loisirs</h1>

                <ul>
                    <li><h2 class = "sousTitle">Tennis</h2>
                    <img class = "logo" id="logoIUT" src="images/tennis.png" alt="logo tennis">
                    <p class = "textBlock">Je pratique le tennis depuis l'âge de 6 ans au club de Pérols.</p>
                    <p class = "textBlock">Ce sport que j'adore me permet de dépenser mon énergie !</p>

                     

                </li>

                    <li><h2 class = "sousTitle">Cor d'harmonie</h2>
                    <img class = "logo" src="images/cor.png" alt="logo cor">
                    <p class = "textBlock">Je joue du cor d'harmonie depuis l'âge de 6 ans</p>
                    <p class = "textBlock">J'ai eu la chance de pouvoir intégrer un orchestre symphonique (<a target="_blank" rel="noopener noreferrer" href="https://www.osadoc.com/">OSADOC</a>),<br> ce qui m'a permis d'apprendre à travailler en équipe</p>

                </li>

                <li><h2 class = "sousTitle">Mangas</h2>
                    <div class="imgList">
                        <img class = "logo" id = "favMangas" src="images/favoriteManga.jpg" alt="Mangas favoris">
                    </div>
                    <p class = "textBlock">Fan de mangas depuis un bon moment j'en possède une petite collection <br>(grâce aux pass cultures)</p>
     
                </li>

                </ul>
            </div>

        </div>
    </div>

    <?php include ('includes/footer.php')?>

</body>
</html>