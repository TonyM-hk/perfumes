<html>
<link rel="stylesheet" href="estilos/boostrap.css">
<link rel="stylesheet" href="estilos/estilos.css?t=3">
<link rel="stylesheet" href="estilos/all.css">
<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

<header>
    <div class="menu" style="position:fixed">
        <div class="container">
            <a href="inicio.php"class="logo">PE</a>
            <nav>
                <ul>
                    
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="marca.php">Marca</a></li>
                    <li><a href="genero.php">Género</a></li>
                    <li><a href="ofertas.php">Ofertas</a></li>
                
                    
                    <?php
                        session_start();
                        if (isset($_SESSION['type'])) {

                            if ($_SESSION['type'] == 2) {
                                echo '<li class="nav-item">
                                     <a class="nav-link" href="formulario_marca.php">Agregar Marca</a>
                                     </li>';
                                echo '<li class="nav-item">
                             <a class="nav-link" href="formulario_modelo.php">Agregar Modelo</a>
                             </li>';
                                echo '<li><a href="cerrar_sesion.php">Cerrar Sesión</a>';
                            }
                        } else {
                            echo '<li><a href="login2.php">Iniciar Sesión</a></li>';
                        }
                        ?>
                    
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</header>

</html>