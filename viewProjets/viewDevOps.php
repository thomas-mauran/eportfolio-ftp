
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hackaton Dev Ops</title>
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
                    <h1>Hackaton DevOps Heroes</h1>
                </div>
                <div class = "description">
                    <p>
                        Cette année j'ai pu participer au hackaton <a target="_blank" rel="noopener noreferrer" href="https://www.hackathon-devops-cagip.fr/">Dev ops Heroes</a>
                        organisé par Ca-gip du 4 au 6 février.
                    </p>

                    <p>
                        L'objectif : "Pilotez vos infrastructures et gérez leur supervision, triomphez du déploiement instantané d’une application résiliente, réactive aux attaques, 
                        aux incidents et aux pics de charge. Comment ? En vous appuyant sur les solutions de l’entreprise et en expérimentant les technologies que le 
                        Cloud peut vous offrir. Vous devrez user de toutes vos connaissances et de tous vos talents pour faire partie des « DevOps Heroes » de demain !"
                    </p>
                    <p></p>
                    <p>
                        Ce hackaton m'a permis de découvrir des personnes incroyables tout en me familiarisant avec les outils et les pratiques Dev Ops.
                    </p>
                    <p>
                        Notre équipe a remporté la 1re place en mettant en place un système de déploiement d'infrastructure automatisé grace à Terraform et Helm.
                        Vous pouvez trouver une démo <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/watch?v=Y-6wPEAAB8Q">ici</a>
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
                imageList[0] = '../images/devopsHeroes/devops.jpg'
                imageList[1] = '../images/devopsHeroes/devops2.jpg'
                imageList[2] = '../images/devopsHeroes/devops3.jpg'
                imageList[3] = '../images/devopsHeroes/devops4.jpg'
                imageList[4] = '../images/devopsHeroes/devops5.png'
                imageList[5] = '../images/devopsHeroes/devops6.png'



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