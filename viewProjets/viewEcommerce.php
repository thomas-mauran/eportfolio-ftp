
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NFT ecommerce</title>
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
                    <h1>NFT ecommerce</h1>
                </div>
                <div class = "description">
                    <p> Dans le cadre de notre projet S3 de prog web nous avons réalisé un site web de 
                    ecommerce. Celui ci devait resepcter le MVC apprit en TD</p>
                    <p>Notre site comportait un pannel admin sécurisé et seulement accéssible 
                    pour certains utilisateur, un système de panier automatisé grace aux sessions, 
                    des recherches par catégories possible et bien d'autres fonctions.
                    </p>
                    <p>Ce projet nous a principalement permit de nous familiariser avec le MVC
                    car nous etions déjà novice en php avec un autre étudiant à la suite du projet
                    <a href="https://thomasprojects.works/viewProjets/viewWediscuss.php">We discuss</a>
                    </p>
                    <p>Vous pouvez essayer le site web par vous même en cliquant sur le lien live
                    sous le carroussel</p>
                       

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
                imageList[0] = '../images/nft.png'
                imageList[1] = '../images/nft1.png'
                imageList[2] = '../images/nft2.png'
                imageList[3] = '../images/nft3.png'
                imageList[4] = '../images/nft4.png'



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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/clement-gambier2/Projet-web-S3"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>

                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://webinfo.iutmontp.univ-montp2.fr/~gambierc/eCommerce/index.php"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

                </div>
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>