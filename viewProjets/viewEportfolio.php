
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
                        description 
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
                imageList[2] = '../images/Pong.png'

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

            
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>