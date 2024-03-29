<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoleMate: Step Up Your Style!</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
    <?php include 'navbar.php'; ?>
    
    <?php
        // Verificar si hay un mensaje de éxito en la URL
        if (isset($_GET['success'])) {
            ?>
            <div class="alert alert-success">
                <?php echo $_GET['success']; ?>
            </div>
            <?php
        }
    ?>

    

    <!-- CARRUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/img1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/img2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/img3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/img4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
    <!-- TERMINA CARRUSEL -->
    <!-- GRID -->
    <div class="grid-container">
        <div class="grid-item">
            <img src="../img/men/Nike-AirJordan1Low.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Air Jordan 1 Low</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/toddler/Nike-Force1.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Force 1</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/women/Nike-AirMax90SE.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Air Max 90SE</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/youth/Nike-AirMoreUptempo.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Air More Uptempo</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/men/NB-550.jpg" alt="">
            <div class="overlay"></div>
            <div class="text"><a href="">550</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/toddler/NB-550.jpg" alt="">
            <div class="overlay"></div>
            <div class="text"><a href="">550</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/women/NB-550.jpg" alt="">
            <div class="overlay"></div>
            <div class="text"><a href="">550</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/youth/NB-574.jpg" alt="">
            <div class="overlay"></div>
            <div class="text"><a href="">574</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/men/Adidas-Forum_84_Low_Shoes_Green_FZ6298_01_standard.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Forum 84 Green</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/toddler/Adidas-_DNA_x_LEGOr_Two-Strap_Hook-and-Loop_Shoes_Yellow_HQ1308_01_standard.jpg"
                alt="">
                <div class="overlay"> </div>
                <div class="text"><a href="">DNAxLEGO</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/women/Adidas-Forum_XLG_Shoes_White_IE0236_01_standard.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Forum White</a></div>
        </div>
        <div class="grid-item">
            <img src="../img/youth/Adidas-Forum_Low_Shoes_White_FY7974_01_standard.jpg" alt="">
            <div class="overlay"> </div>
            <div class="text"><a href="">Forum White</a></div>
        </div>
    </div>

    <!-- JAVA SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>