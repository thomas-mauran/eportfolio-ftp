
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
                        description 
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

                    console.log(i)
                    if(i == imageList.length-1 && add == 1){
                        i = 0
                        console.log("test")
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