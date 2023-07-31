<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoleMate: Step Up Your Style!</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/shoppingBag.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-bjkfb2VRqTgbo8I3fbnTgm+Gjmd/ggHpfPn4F7lTKzBQddx+oZ3yn9FC+frfCwyohfZNTzD4WdLTYM2g3VbFtA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- NAV -->
    <?php include 'navbar.php'; ?>
    <!-- CIERRE NAV -->

    <!-- SHOPPING BAG -->

    <div class="shopping-cart">
        <!-- Title -->
        <div class="title">
            Tu carrito de compras
        </div>

        <!-- Product #1 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="../img/men/Adidas-Forum_84_Low_Shoes_Green_FZ6298_01_standard.jpg" alt="" />
            </div>

            <div class="description">
                <span>Forum 84 Low</span> <!-- modelo -->
                <span>Adidas</span> <!-- marca -->
                <span>White</span> <!-- color -->
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="../img/plus.svg" alt="Sumar">
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="../img/minus.svg" alt="Restar">
                </button>
            </div>
            

            <div class="total-price">$549</div>
        </div>

        <!-- Product #2 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="img/men/Adidas-Forum_84_Low_Shoes_Green_FZ6298_01_standard.jpg" alt="" />
            </div>

            <div class="description">
                <span>Forum 84 Low</span> <!-- modelo -->
                <span>Adidas</span> <!-- marca -->
                <span>White</span> <!-- color -->
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="../img/plus.svg" alt="Sumar">
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="../img/minus.svg" alt="Restar">
                </button>
            </div>
            

            <div class="total-price">$549</div>
        </div>

        <!-- Product #3 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="../img/men/Adidas-Forum_84_Low_Shoes_Green_FZ6298_01_standard.jpg" alt="" />
            </div>

            <div class="description">
                <span>Forum 84 Low</span> <!-- modelo -->
                <span>Adidas</span> <!-- marca -->
                <span>White</span> <!-- color -->
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="../img/plus.svg" alt="Sumar">
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="../img/minus.svg" alt="Restar">
                </button>
            </div>
            

            <div class="total-price">$549</div>
        </div>
    </div>
    <!-- CIERRE SHOPPING BAG -->

    <script src="../js/shoppingBag.js"></script>
</body>

</html>