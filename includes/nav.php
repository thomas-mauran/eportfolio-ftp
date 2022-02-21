<?php 
$DS = DIRECTORY_SEPARATOR;
$ROOT_FOLDER = __DIR__ . $DS . "..";
?>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<nav class = "navbar">

    <div id = "logo"> <a href="/index.php"><h1>portfolio</h1></a></div>

    <div class = "burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

    <div class="nav-links">
        <ul >
            <li><a class = "link" href="/eportfolio-ftp/index.php">Home</a></li>
            <li><a class = "link" href="/eportfolio-ftp/projets.php">Projets</a></li>
            <li><a class = "link" href="/eportfolio-ftp/aPropos.php">About</a></li>
            <li><a class = "link" href="/eportfolio-ftp/contact.php">Contact</a></li>
        </ul>
    </div>

</nav>
<script src="/js/app.js"></script>
<script>
  AOS.init();
</script>

