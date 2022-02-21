
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SSSM30</title>
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
                    <h1>SSSM30 Application de santée</h1>
                </div>
                <div class = "description">
                    <p>Ce projet réalisé pendant mon 3eme semestre de DUT Informatique avait pour </p>
                    <p>Pendant leurs interventions les pompiers doivent appliquer très précisément des protocoles très spécifiques en fonction de chaque situation. 
                    <p>Ces protocoles d’interventions très pénibles à retenir doivent faire l’objet d’un rapport suite à chaque intervention. </p>
                    Certaines situations peuvent rapidement devenir très stressantes même pour un pompier aguerri et peuvent augmenter le nombre d’erreurs pendant la mise en œuvre d’un protocole. 
                    L’application SSSM_30 a pour but la digitalisation de l’ensemble des protocoles de soins des pompiers. 
                    Elle permet de pouvoir en quelques clics trouver un protocole à suivre. 
                    <p>Les différentes étapes du protocole présentent des cases à cocher qui permettent d’horodater chaque action.     
                    A la fin du protocole les pompiers peuvent donc envoyer un rapport d’intervention, généré par l’application et envoyé par mail, regroupant toutes les actions réalisées/effectuées.</p> 
                    <p>L’application permet aussi d’accéder à un hub d'applications utiles et à un annuaire regroupant les numéros de certains médecins, pompiers et hôpitaux.</p>

                    <p> Nous avons au final crée une interface web pour que les pompiers puissent contrôler le contenu de l'application. 
                    Nous avons pu refactoriser toute l'application pour les prochains étudiants. L'application a reçu une refonte graphique
                    et des nouvelles fonctionnalités 
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
                imageList[0] = '../images/SSSM1.png'
                imageList[1] = '../images/SSSM2.png'
                imageList[2] = '../images/SSSM3.png'


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

                
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>