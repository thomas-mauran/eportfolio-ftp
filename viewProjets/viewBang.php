
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bang</title>
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
                    <h1>Bang</h1>
                </div>
                <div class = "description">
                    <p>
                        Pendant ma première année de DUT nous avons adapter le jeu de société bang pour en faire une version
                        interactive et multijoueur.
                    </p>
                    <p> 
                        Ce projet réalisé dans notre matière IHM (Interface Homme Machine) nous a appris à réaliser
                        des interfaces en java grace à Java FX.
                    </p>
                    <p>
                        Nous avions au préalable réalisé des maquettes grâce à figma pour organiser nos pensées et se mettre 
                        daccord sur le design général de notre jeu.
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
                imageList[0] = '../images/bang.jpeg'
                imageList[1] = '../images/bang2.png'
                imageList[2] = '../images/bang3.png'

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