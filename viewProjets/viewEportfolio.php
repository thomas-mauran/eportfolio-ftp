
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>E-portfolio</title>
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
                    <h1>E-portfolio</h1>
                </div>
                <div class = "description">
                    <p>
                        Pendant ma première année de DUT nous avons réalisé un portfolio sur un CMS (wix). 
                        Un portfolio de développeur web réalisé avec wix ne me paraissait pas idéal pour présenter mes compétences. 
                    </p>

                    <p>C'est pourquoi j'ai décidé de refaire celui-ci comme prétexte pour apprendre de nouvelles choses.</p>
                    <p>
                        Ce portfolio codé en PHP CSS et Javascript et hébergé sur mon Raspberry Pi 3 ma permis d'apprendre à sécuriser un raspberry pi et mon réseau 
                        grâce à cloudflare / fail2ban / des pare-feu et d'autres méthodes.
                    </p>

                    <p>
                        Je voulais apprendre à faire des sites interactifs et pour cela je me suis orienté vers la librairie Three js. 
                        J'avais déja appris a utiliser P5.js mais Three.js avait l'air beaucoup plus pratique pour faire des animations intéractives et en 3D  grâce
                        à son système de caméra et de render
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
                imageList[0] = '../images/raspberry.png'
                imageList[1] = '../images/raspberry2.jpg'

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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/thomas-mauran/eportfolio-ftp"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>

                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://thomasprojects.works/"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

            </div>

            
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>