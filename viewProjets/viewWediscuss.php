
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>We discuss</title>
    <link href="/css/navBar.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/viewProjets.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php include ('../includes/nav.php')?>

    <div class = "container">
        <div class = "box">
            <div class = "texte">
                <div class = "titre">
                    <h1>We discuss</h1>
                </div>
                <div class = "description">
                    <p>
                        Chaque année la <a target="_blank" rel="noopener noreferrer" href="https://bourse.coddity.com/"> bourse coddity</a>
                        propose à des étudiants de participer à un concours de programmation à thème imposé.
                    </p>
                    <p>
                        L'année dernière le sujet du concours portait sur les fake new et comment vérifier la véracité d'une information
                        sur internet.
                    </p>
                    <p>
                        Avec mon ami Clement Gambier nous nous sommes lancé dans ce projet avec pour objectif la réalisation
                        d'un forum où les utilisateurs peuvent proposer un sujet ajouté des sources débattre grace à des commentaires.
                    </p>
                    <p>
                        Avant de commencer ce projet nous n'avions aucune connaissance en PHP. En première année de DUT nous avons eu beaucoup
                        de cours sur la création de requêtes SQL mais pas de formation sur la façon de relier une base de données à un site web.
                    </p>
                    <p>
                        Pour cela nous avons appris PHP et MYSQL de notre côté tout le long de notre projet.
                    </p>
                    <p>
                        Au final nous sommes très fiers du résultat. Les quelques fonctionnalités du site fonctionnent parfaitement ce qui
                        le rend totalement utilisable. Celui-ci nous aura permis de passer en finale du concours face à 5 autres équipes
                        mais malheureusement nous n'avons pas gagné.
                    </p>
                    <p>
                        Ce projet nous aura quand même appris énormément sur le développement web et la gestion de projet.
                    </p>

                </div>
            </div>

        </div>

        <div class = "box" id="boxImage">
            <img id = "imageSlide" alt="Image slider">
            <script> 
                var i = 0;
                var imageList = [];
                var image = document.querySelector('#imageSlide')


                // Liste d'images
                imageList[0] = '../images/wediscuss.png'
                imageList[1] = '../images/wediscuss2.png'
                imageList[2] = '../images/wediscuss3.png'
                imageList[3] = '../images/wediscuss4.png'
                imageList[4] = '../images/wediscuss5.png'


                function changeImg(add = 0){

                    if(i == imageList.length-1 && add == 1){
                        i = 0
                    }
                    else if(i == 0 && add == -1){
                        i = imageList.length-1
                    }
                    else{
                        i += add      
                    }
                    image.src = imageList[i]

                }
                changeImg()
            </script>

            <div class = "line" style="margin-top: 1%;">
                <div class = "liens">
                    <button onclick="changeImg(-1)" class= "sliderButton"> <img src="../images/leftArrow.png" class = "arrow" alt="left arrow"></button>
                </div>

                <div class = "liens">
                    <button onclick="changeImg(1)" class = "sliderButton"> <img src="../images/rightArrow.png" class = "arrow" alt="right arrow"></button>
                </div>

            </div>

            <div class ="line">
                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/clement-gambier2/wediscuss_"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>

                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://clement-gambier.fr/projets/wediscuss/index.php"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

                </div>
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>