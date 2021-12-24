
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pong</title>
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
                    <h1>Pong</h1>
                </div>
                <div class = "description">
                    <p>
                        Cette reproduction du jeu Pong codé en python grace au module turtle m'a permis de découvrir la programmation et ses bases.
                    </p>
                    <p>
                        Vous pouvez accéder au code en cliquant sur le lien github.                    
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
                imageList[0] = '../images/pong.png'
                imageList[1] = '../images/pong1.png'
                imageList[1] = '../images/pong2.png'

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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/thomas-mauran/pong"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>
                </div>

            
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>