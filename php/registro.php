<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <main>
        <div class="login">
            <h2>Registrarse</h1>
                <div class="container"> 
                    <form>                         
                        <input type ="hidden">
                        <div class="form-group"> 
                            <label class="Campo" for="nombre">Usuario</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Nombre cliente" id="nombres" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="apellidos">Apellidos</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Apellidos" id="apellidos" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="num_tarjeta">Numero de Tarjeta</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Numero de tarjeta" id="num_tarjeta" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="cvv">Identificacion</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Identificacion" id="cedula" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="password">Contraseña</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Contraseña" id="contra" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" value="Guardar">Registrarse</button>

                    </form>  
                </div>
            </div>
        </div>
    </main>


</body>

</html>