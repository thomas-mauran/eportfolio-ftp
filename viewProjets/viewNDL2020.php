
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nuit de l'info 2020</title>
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
                    <h1>Nuit de l'info 2020</h1>
                </div>
                <div class = "description">
                    <p>
                        J'ai pu participer à la nuit de l'info 2020 avec d'autres étudiants de l'IUT.
                        Dans cette compétition nous avions sélectionné plusieurs défis qui nous semblait réalisable avec nos faibles connaissances
                        en développement web à l'époque.
                        
                    </p>
                    <p>
                    Nous avons pu remporter la première place du défis "meilleur design de la barre de navigation".
                        Pour cela nous avions réalisé un bouton circulaire qui en cliquant dessus affichait 4 autres boutons circulaires
                        autours pour chaque page de notre site. 
                        </p>

                </div>
            </div>

        </div>

        <div class = "box" id="boxImage">
            <img id = "imageSlide" alt="test">
            <script> 
                var i = 0;
                var imageList = [];
                var image = document.querySelector('#imageSlide')


                // Liste d'images
                imageList[0] = '../images/NDL2020.png'
                imageList[1] = '../images/NDL2020-2.jpg'
                imageList[2] = '../images/NDL2020-3.jpg'

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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/IUTInfoMontp-M2105/projetihm-besse-gambier-lefort-mauran"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>
            </div>
            
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>