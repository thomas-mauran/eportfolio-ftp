
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Space everyday</title>
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
                    <h1>Space everyday</h1>
                </div>
                <div class = "description">
                    <p>
                       Pour commencer à apprendre react j'ai réalisé cette petite application qui utilise
                       l'api APOD de la nasa pour accéder à des informations et des images tous les jours
                       sur l'espace.
                    </p>
                    <p>Cette petite application fonctionne très bien en format smartphone. Vous pouvez l'ajouter
                    à votre écran d'accueil
                    </p>
                    <p>Pour visualiser le projet en live cliquez sur le bouton lien live. Vous pouvez aussi accéder
                    au code source de l'application sur le lien github</p>

                </div>
            </div>

        </div>

        <div class = "box" id="boxImage" >
            <img id = "imageSlide" alt="Image slider">
            <script> 
                var i = 0;
                var imageList = [];
                var image = document.querySelector('#imageSlide')


                // Liste d'images
                imageList[0] = '../images/space-everyday1.png'
                imageList[1] = '../images/space-everyday2.png'



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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/thomas-mauran/space-infos"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>

                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://thomasprojects.works/projetsFiles/space-everyday/"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

                </div>
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>