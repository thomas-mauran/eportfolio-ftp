
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projets</title>
    <link href="/css/navBar.css" rel="stylesheet" type="text/css">
    <link href="/css/projets.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">

    <script src="js/three.js"></script>


</head>
<body>
    <?php include ('./includes/nav.php')?>



    <div class = "centeredMain">
        <canvas id="bg"></canvas>
        <script src="js/threeJSViewProjets.js"></script>

        <div class = "block">
            <div class = "titre">
                <h1>Mes projets</h1>
            </div>
            <div class = "description">
                <p>Bienvenue sur la page projet</p>
                <p>Je regroupe ici tout les projets que j'ai pu réaliser au cours des dernieres années.</p>
                <p>Ces projets ont pu être réalisé dans le cadre de ma formation a l'iut ou en autodidacte</p>

            </div>
        </div>

        <div class = "block">

            <h1>2021</h1>

            <div class = "projetLine">

                    <div class = "projet">
                        <div class = "description">
                            <h2>We discuss</h2>
                            <div class = "imageLien">
                                <a href="/viewProjets/viewWediscuss.php">
                                    <img src="images/wediscuss.png" alt="wediscuss image">
                                </a>
                            </div>

                        </div>
                    </div>
    
                    <div class = "projet">
                        <div class = "description">
                            <h2>Nuit de l'info</h2>

                            <div class = "imageLien">
                                <a href="/viewProjets/viewNDL2021.php">
                                    <img src="images/NDL2021.png" alt="Nuit de l'info image">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class = "projet">
                        <div class = "description">
                            <h2>E-portfolio</h2>

                            <div class = "imageLien">
                                <a href="/viewProjets/viewEportfolio.php">
                                    <img src="images/raspberry.png" alt="E-portfolio">
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class = "projetLine">
                    <div class = "projet">
                        <div class = "description">
                            <h2>Projet bang</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/bang.jpeg" alt="Projet bang">
                                </a>
                            </div>

                        </div>
                    </div>

                    
                </div>





        </div>


        <div class = "block">
            <h1>2020</h1>

            <div class = "projetLine">

    
                    <div class = "projet">
                        <div class = "description">
                            <h2>Nuit de l'info</h2>

                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/NDL.png" alt="wediscuss image">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class = "projet">
                        <div class = "description">
                            <h2>Premier site vitrine</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/bang.jpeg" alt="Projet bang">
                                </a>
                            </div>

                        </div>
                    </div>


                </div>
        </div>

        <div class = "block">
            <h1>2019</h1>
            <div class = "projetLine">
                

                <div class = "projet">
                        <div class = "description">
                            <h2>Fractal tree</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/fractalTree.png" alt="Fractal trees">
                                </a>
                            </div>

                        </div>
                </div>

                <div class = "projet">
                        <div class = "description">
                            <h2>ISS locator</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/iss.png" alt="Projet bang">
                                </a>
                            </div>

                        </div>
                </div>


                <div class = "projet">
                        <div class = "description">
                            <h2>Bouncing balls</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/bouncingBalls.png" alt="Bouncing balls">
                                </a>
                            </div>

                        </div>
                </div>

            </div>

            <div class = "projetLine">
                <div class = "projet">
                        <div class = "description">
                            <h2>Solar system generator</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/solarSystem.png" alt="Solar System">
                                </a>
                            </div>

                        </div>
                </div>

                <div class = "projet">
                        <div class = "description">
                            <h2>Bouncing lines</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/bouncingLines.png" alt="Bouncing lines">
                                </a>
                            </div>

                        </div>
                </div>

                <div class = "projet">
                        <div class = "description">
                            <h2>Rotating lines</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/rotatingLines.png" alt="Rotating lines">
                                </a>
                            </div>

                        </div>
                </div>

                



            </div>



            
        </div>

        <div class = "block">
            <h1>2018</h1>

            <div class = "projetLine">
                <div class = "projet">
                        <div class = "description">
                            <h2>Turtle Soccer</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/turtleSoccer.png" alt="Turtle soccer">
                                </a>
                            </div>

                        </div>
                </div>

                <div class = "projet">
                        <div class = "description">
                            <h2>Pong</h2>
                            <div class = "imageLien">
                                <a href="index.php">
                                    <img src="images/Pong.png" alt="Pong">
                                </a>
                            </div>

                        </div>
                </div>




            </div>

        </div>


    </div>

    <?php include ('includes/footer.php')?>


</body>
</html>