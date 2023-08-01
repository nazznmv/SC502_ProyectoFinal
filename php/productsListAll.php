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
    <link rel="stylesheet" href="../css/productsList.css">
</head>

<body>
    <!-- NAV -->
    <?php include 'navbar.php'; ?>
    <!-- CIERRE NAV -->
    <div class="column-container">
        <div class="filtro-container">
            <div class="filtro">
                <ul >
                    <li style="font-size: 3.5vh; font-style: italic;">Filtrar por marca</li>
                    <li><a href="#" data-marca="todos" class="marca">Todos</a></li>
                    <li><a href="#" data-marca="nike" class="marca">Nike</a></li>
                    <li><a href="#" data-marca="new-balance" class="marca">New Balance</a></li>
                    <li><a href="#" data-marca="adidas" class="marca">Adidas</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="product-grid">
                <!-- Aquí se mostrarán los productos -->

                <div class="grid-item nike">
                    <img src="../img/men/Nike-AirJordan1Low.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Air Jordan 1 Low</a></div>
                </div>
                <div class="grid-item nike">
                    <img src="../img/toddler/Nike-Force1.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Force 1</a></div>
                </div>
                <div class="grid-item nike">
                    <img src="../img/women/Nike-AirMax90SE.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Air Max 90SE</a></div>
                </div>
                <div class="grid-item nike">
                    <img src="../img/youth/Nike-AirMoreUptempo.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Air More Uptempo</a></div>
                </div>
                <div class="grid-item new-balance">
                    <img src="../img/men/NB-550.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="text"><a href="">550</a></div>
                </div>
                <div class="grid-item new-balance">
                    <img src="../img/toddler/NB-550.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="text"><a href="">550</a></div>
                </div>
                <div class="grid-item new-balance">
                    <img src="../img/women/NB-550.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="text"><a href="">550</a></div>
                </div>
                <div class="grid-item new-balance">
                    <img src="../img/youth/NB-574.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="text"><a href="">574</a></div>
                </div>
                <div class="grid-item adidas">
                    <img src="../img/men/Adidas-Forum_84_Low_Shoes_Green_FZ6298_01_standard.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Forum 84 Green</a></div>
                </div>
                <div class="grid-item adidas">
                    <img src="../img/toddler/Adidas-_DNA_x_LEGOr_Two-Strap_Hook-and-Loop_Shoes_Yellow_HQ1308_01_standard.jpg"
                        alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">DNAxLEGO</a></div>
                </div>
                <div class="grid-item adidas">
                    <img src="../img/women/Adidas-Forum_XLG_Shoes_White_IE0236_01_standard.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Forum White</a></div>
                </div>
                <div class="grid-item adidas">
                    <img src="../img/youth/Adidas-Forum_Low_Shoes_White_FY7974_01_standard.jpg" alt="">
                    <div class="overlay"> </div>
                    <div class="text"><a href="">Forum White</a></div>
                </div>


            </div>
        </div>

    </div>


    <script src="../js/productsListAll.js"></script>
</body>

</html>