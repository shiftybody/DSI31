<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-car'></i>
            <span class="logo_name">Control Vehicular</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-user' ></i>
                        <span class="link_name">Conductores</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="FConductores.php">Conductores</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-id-card' ></i>
                        <span class="link_name">Licencias</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Licencias</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Multas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Multas</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-bell' ></i>
                        <span class="link_name">Oficiales</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Oficiales</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-user-detail' ></i>
                        <span class="link_name">Propietarios</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Propietarios</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-news'></i>
                        <span class="link_name">Tarjetas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Tarjetas</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-car' ></i>
                        <span class="link_name">Vehiculos</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Vehiculos</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-shield'></i>
                        <span class="link_name">Verificaciones</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Verificaciones</a></li>
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Consultar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>


            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Usuario</div>
                        <div class="job">Administrador</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>


    <script src="../../assets/js/scripts.js"></script>
    