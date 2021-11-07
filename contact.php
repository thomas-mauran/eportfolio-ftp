<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/navBar.css" rel="stylesheet" type="text/css">
    <link href="/css/contact.css" rel="stylesheet" type="text/css">

    <script src="js/three.js"></script>

    <title>Contact</title>
</head>
<body>
    <?php include ('./includes/nav.php')?>

    <div class = "container">

        <canvas id="bg"></canvas>
        <script src="js/threeJSViewContact.js"></script>

    
        <div class = "line">
            <h1>Comment me contacter</h1>
        </div>


        <div class = "line" id = "info-line">
            <div class = "item">
                <img src="images/phoneIcon.png" alt="phone icon">
                <p class="description"> 06 95 15 48 70</p>
            </div>

            <div class = "item">
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/thomas-mauran-9238371b7/"><img src="images/linkedin.png" alt="linked in "></a>
                <p class="description"> @thomas-mauran</p>
            </div>

            <div class = "item">
                <img src="images/mailIcon.png" alt="mail icon">
                <p class="description"> thomasmauran@yahoo.com</p>
            </div>

        </div>

    </div>
    <?php include ('includes/footer.php')?>


</body>
</html>