
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nuit de l'info 2021</title>
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
                    <h1>Nuit de l'info 2021</h1>
                </div>
                <div class = "description">
                    <p>
                        Cette année j'ai pu participer à la nuit de l'info à l'IUT de Montpellier avec d'autres étudiants.
                        Cette édition se portait sur les sauveteurs en mers. Nous avons donc réalise un forum dans le style Wikipédia
                        où les utilisateurs avec le grade collaborateur peuvent rajouter des informations qui seront ensuite validées par
                        un administrateur.
                    </p>
                    <p>
                        Nous avions sélectionné plusieurs défis surtout en design qui nous ont permis d'utiliser Three.js pour faire
                        des animations dans un thème naval.
                    </p>
                    <p>
                        Je vous laisse découvrir notre site grace au bouton Lien live situé en bas de la page
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
                imageList[0] = '../images/NDL2021.png'
                imageList[1] = '../images/NDL2021-2.png'
                imageList[2] = '../images/NDL2021-3.png'

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
                    <a target="_blank" rel="noopener noreferrer" href="https://ndi2021-ours.herokuapp.com/"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

                </div>
            </div>
        </div>
    </div>

    <?php include ('../includes/footer.php')?>


</body>
</html>