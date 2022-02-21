
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CICD portfolio</title>
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
                    <h1>Mise en place d'une pipeline CI CD avec github action et docker pour mon portfolio</h1>
                </div>
                <div class = "description">
                    <p>
                        Ce petit projet avait pour but de me familiariser encore plus avec github action et docker après avoir pu m'y initier au <a target="_blank" rel="noopener noreferrer" href="https://thomasprojects.works/viewProjets/viewDevOps.php">hackaton dev-ops heroes</a>.            
                    </p>

                    <p>
                        L'objectif : faire tourner mon site web dans un conteneur docker sur mon raspberry pi et le mettre à jours à chaque merge sur le main    
                    </p>
                    <p>
                        Comment ca marche ?<br>
                        Mon raspberry pi fait office de runner github action. Un script tourne dans un screen et écoute en permanence github pour voir s'il y a des 
                        merges sur le main. Si c'est le cas il va exécuter un workflow github action qui va créer une nouvelle image avec php et apache 
                        en copiant tous les fichiers du repo dans /var/www/html du conteneur. Il suffit ensuite de stopper puis remove l'ancien conteneur et
                        d'en run un nouveau avec l'image dernièrement créée


                    </p>
                    <p>
                        Pour l'instant le workflow est très lent, en moyenne 3 à 7 min au total. C'est en partie due aux images générées qui sont très lourdes, je n'ai pas encore fait de multistaging dans le Dockerfile. 
                        Je ne sais pas si à la place de supprimer et recréer le conteneur je ne pourrais pas plutot update les fichiers à l'intérieur ce qui me ferait aussi gagner énormément de temps
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
                imageList[0] = '../images/CICD-eportfolio/CICD-pipeline.png'
                imageList[1] = '../images/CICD-eportfolio/CICD-pipeline2.png'




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

            
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>