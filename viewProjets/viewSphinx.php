
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sphinx</title>
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
                    <h1>Sphinx</h1>
                </div>
                <div class = "description">


                    <h1>Pourquoi ?</h1>

                    <p> J'adore le jeu trivial poursuit et je voulais créer un site ou je pouvais apprendre de nouvelle chose avec un système de leaderboard / stats.</p>

                    <h1>Comment ca fonctionne ?</h1>

                    <h2> Les langages  🧬</h2>
                    <p>Je ne voulais pas coder ce site en PHP Mysql comme nous l'avions appris à l'IUT . Ce site était aussi un prétexte pour me former à des nouvelles technologies plus recentes. C'est pourquoi j'ai réalisé ce site en Node js et avec mongo db</p>
                    <p>J'ai pu apprendre node js et mongo db grace à open classroom.</p>
                    <p>Le site fonctionne aussi comme une application indépendante ( PWA ) pour smartphone et peu être ajouté à l'écran d'accueil.</p>

                    <p></p>
                    <h2> Réseau  🌐</h2>

                    <p> Tout le front est hébergé sur mon raspberry pi comme ce portfolio. </p>
                    <p> Pour faire cours, chacun de mes sites tourne dans un docker container sur un port particulier. Sur le raspberry pi en lui-même un serveur apache tourne et redirige les requêtes grace à des virtuals hosts sur les bons ports</p>
                    <p> J'ai aussi mis en place une pipeline CI / CD avec github action, de cette manière a chaque push sur le main mon site est mis à jour.</p>
                    <p>J'utilise aussi cloudflare comme comme proxy pour cacher l'adresse ip de mon domicile</p> 

                    <h1> Prochaines etapes : </h1>

                    <ul>
                        <li>✅ Améliorer le quiz avec un timer ⏱</li>
                        <li>✅ Améliorer le mail envoyé 📩</li>
                        <li> Ajouter des photos de profils pour chaque utilisateur 🌌</li>
                    </ul>
                    

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
                imageList[0] = '../images/sphinx/sphinx1.jpg'
                imageList[1] = '../images/sphinx/sphinx2.png'
                imageList[2] = '../images/sphinx/sphinx3.png'
                imageList[3] = '../images/sphinx/sphinx4.png'
                imageList[4] = '../images/sphinx/sphinx5.png'
                imageList[5] = '../images/sphinx/sphinx6.png'
                imageList[6] = '../images/sphinx/sphinx7.png'



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
                    <a target="_blank" rel="noopener noreferrer" href="https://github.com/SphinxQuiz"><img class="imgLiens" src="/images/logoGithub.png" alt="logo github"></a>
                    <p>Lien github</p>

                </div>

                <div class = "liens">
                    <a target="_blank" rel="noopener noreferrer" href="https://sphinxquiz.fr"><img class="imgLiens" src="/images/liveCode.png" alt="logo live code"></a>
                    <p>Lien live</p>

                </div>
            </div>
        </div>
    </div>
    <?php include ('../includes/footer.php')?>

</body>
</html>