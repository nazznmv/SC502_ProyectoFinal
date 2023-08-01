<nav>
    <div class="navbar-container">
        <ul>
            <li class="activo"></li>
            <li class="noActivo"><a href="index.php"><img id="logo" src="../img/logo.png" alt=""></a></li>
            <!-- Aquí irá el logo -->
            <li><a href="">MUJER</a>
                <div class="menuEmergente">
                    <ul>
                        <li><a href="">Nike</a></li>
                        <li><a href="">New Balance</a></li>
                        <li><a href="">Adidas</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="">HOMBRE</a>
                <div class="menuEmergente">
                    <ul>
                        <li><a href="">Nike</a></li>
                        <li><a href="">New Balance</a></li>
                        <li><a href="">Adidas</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="">JUVENIL</a>
                <div class="menuEmergente">
                    <ul>
                        <li><a href="">Nike</a></li>
                        <li><a href="">New Balance</a></li>
                        <li><a href="">Adidas</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="">INFANTE</a>
                <div class="menuEmergente">
                    <ul>
                        <li><a href="">Nike</a></li>
                        <li><a href="">New Balance</a></li>
                        <li><a href="">Adidas</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="">PROMOCIONES</a></li>
            <li><a href="nosotros.php">NOSOTROS</a></li>
        </ul>
        
        <ul id="accountNav">
            <?php
            // Iniciar sesión antes de acceder a $_SESSION['user_id']
            session_start();
            
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['user_id'])) {
                // Si el usuario ha iniciado sesión, mostrar opciones "Mi cuenta" y "Salir"
                ?>
                <li class="noActivo">
                    <a href="myAccount.php">
                        <img style="height: 5vh;" src="../img/myAccount.png" alt="">
                        
                    </a>
                    <div class="menuEmergente">
                        <ul>
                        <?php
                        // Mostrar el tipo de usuario de admin
                        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
                            $role = $_SESSION['role'];
                            echo '<li><a href="">' . $role . '</a></li>';
                        }
                        ?>               
                            <li><a href="myAccount.php">Mi Cuenta</a></li>
                            <li><a href="logout.php">Salir</a></li>
                        </ul>
                    </div>
                </li>
                <?php
            } else {
                // Si el usuario no ha iniciado sesión, mostrar opción "Iniciar sesión" y "Registrarse"
                ?>
                <li class="noActivo"><a href="login.php"><img style="height: 5vh;" src="../img/myAccount.png"
                            alt=""></a>
                    <div class="menuEmergente">
                        <ul>
                            <li><a href="login.php">Identificarse</a></li>
                            <li><a href="registro.php">Registrarse</a></li>
                        </ul>
                    </div>
                </li>
                <?php
            }
            ?>
            <!-- Carrito -->
            <li class="noActivo"><a href="shoppingBag.php"><img style="height: 5vh;" src="../img/bag.png" alt=""></a></li>
            <!-- Búsqueda -->
            <li class="noActivo"><a href=""><img style="height: 5vh;" src="../img/search.png" alt=""></a></li>
        </ul>
    </div>
</nav>
