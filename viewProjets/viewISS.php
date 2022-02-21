
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Iss locator</title>
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
                    <h1>Iss sur carte</h1>
                </div>
                <div class = "description">
                    <p>
                        Ce projet m'a permis d'apprendre a utiliser une api. 
                        En effet si vous cliquez sur le lien du projet
                        vous pourrez voir la position de l'ISS en live sur une carte
                    </p>
                </div>
            </div>

        </div>

        <div class = "box" id="boxImage">
            <img id = "imageSlide" alt="image slider">
            <script> 
                var i = 0;
                var imageList = [];
                var image = document.querySelector('#imageSlide')


                // Liste d'images
                imageList[0] = '../images/iss.png'
                imageList[1] = '../images/iss3.png'
                imageList[2] = '../images/iss2.png'

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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/thomas-mauran/ISS"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>

                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://thomasprojects.works/projetsFiles/ISS/"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

                </div>

            
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>