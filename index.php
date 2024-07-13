<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="busquedas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Captivar | Consultora RH</title>
</head>
<body>
    <a href="https://wa.me/5492320512813?text=Hola,%20solicito%20más%20informacion..." target="_blank" class="float">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <header>
        <div class="back">
            <div class="menu container">
                <a href="Index.html" class="logo"><img src="img/Logo 500.png" alt="Logo"></a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="img/MenuDesplegable.png" alt="" class="menu-icono">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Quienes somos</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Busquedas</a></li>
                        <li><a href="#">Carga tu CV</a></li>
                        <li><a href="#">Contactanos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="cont-busquedas">
        <div class="usuario">
            <form action="php/UsuarioContraseniaAdmin.php">
                <p>Email</p>
                <input type="email" name="" id="email" placeholder="Ingrese su Email" required>
                <p>Contraseña</p>
                <input type="password" name="" id="contrasenia" placeholder="Ingrese su contraseña" required>
                <br>
                <br>
                <input type="submit" value="Ingresar">
                <input type="reset" value="Borrar">
            </form>
        </div>
    </section>
    <footer>
        <nav class="abajo">
            <ul>
                <li><a href="#">Quienes somos</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Busquedas</a></li>
                <li><a href="#">Carga tu CV</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
            <br>
            <ul>
                <li><a href="#"><img src="icons/ig.png" alt=""></a></li>
                <li><a href="#"><img src="icons/fb.png" alt=""></a></li>
                <li><a href="#"><img src="icons/x.png" alt=""></a></li>
                <li><a href="#"><img src="icons/linkedin.png" alt=""></a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>