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
                <h1 class="title">Bienvenue !</h1>
                <p class = "textBlock">Continuez de scroll pour en apprendre plus sur moi et mon parcours</p>
                <p class = "textBlock">Vous pouvez cliquer <a href="images/CV.pdf" download>ici</a> pour telecharger mon CV officiel</p> 

            </div>

            <div class = "container">
                <h1 class="title">A propos de moi</h1>
                <img class="logo" src="images/cvImage.jpeg" alt="moi">

                <p class = "textBlock"> Je m'appelle Thomas Mauran j'ai 19 ans je vis à Pérols et j'étudie l'informatique à l'IUT de Montpellier. Passionné d'informatique depuis longtemps je m'épanouis complètement dans mes études actuelles et je cherche à en apprendre plus dans ce domaine.</p>
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
                    <p class = "textBlock">Obtention de la mention bien a mon baccalauréat</p>
                    </li>
                </ul>
            </div>

            <div class = "container">
                <h1 class="title">Mes Loisirs</h1>

                <ul>
                    <li><h2 class = "sousTitle">Tennis</h2>
                    <img class = "logo" id="logoIUT" src="images/tennis.png" alt="logo tennis">
                    <p class = "textBlock">Je fais du tennis depuis une dizaine d'année au club de Pérols.</p>
                    <p class = "textBlock">Ce sport que j'adore me permet de depenser mon energie !</p>

                     

                </li>

                    <li><h2 class = "sousTitle">Cor d'harmonie</h2>
                    <img class = "logo" src="images/cor.png" alt="logo cor">
                    <p class = "textBlock">Je fais du cor d'harmonie depuis une dizaine d'années</p>
                    <p class = "textBlock">J'ai eu la chance de pouvoir jouer dans des orchestres symphoniques (<a target="_blank" rel="noopener noreferrer" href="https://www.osadoc.com/">OSADOC</a>),<br> ce qui ma permit d'apprendre à travailler en équipe</p>

                </li>

                <li><h2 class = "sousTitle">Mangas</h2>
                    <div class="imgList">
                        <img class = "logo" id = "favMangas" src="images/favoriteManga.jpg" alt="Mangas favoris">
                    </div>
                    <p class = "textBlock">Fan de mangas depuis un bon moment j'ai la chance d'en posséder une grande collection <br>(grace aux pass cultures)</p>
                    <h3 class = "h3Class">Tier list :</h3>
                    <ol>
                        <li class = "tierList">1. Berserk</li>
                        <li class = "tierList">2. Steel Ball Run</li>
                        <li class = "tierList">3. Chainsaw Man</li>
                        <li class = "tierList">4. Pluto</li>
                        <li class = "tierList">5. SNK</li>
                        <li class = "tierList">6. 20th century boys</li>
                        <li class = "tierList">7. Bonne nuit punpun</li>


                    </ol>
                </li>

                </ul>
            </div>

        </div>
    </div>

    <?php include ('includes/footer.php')?>

</body>
</html>