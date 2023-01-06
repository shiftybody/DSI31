<!DOCTYPE html>

<html lang="en" dir="ltr" style="overflow: overlay;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../node_modules/@fortawesome/fontawesome-free/svgs/solid/car-side.svg" />
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css" />
  <link rel="stylesheet" href="../assets/css/styles.css" >
  <style>
    #hamburger {
      cursor: pointer;
    }

    #overlay {
      width: 100%;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(8px);
      position: fixed;
      left: 0;
      z-index: 1;
      display: none;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes fadeOut {
      0% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }

    .sidebar {
      position: fixed;
      top: 5.5em;
      left: 25px;
      height: auto;
      width: auto;
      background-color: rgb(23 23 23);
      z-index: 2;
      white-space: nowrap;
    }

    .sidebar.close {
      width: 50px;
      display: none;
    }

    .sidebar .nav-links {
      height: 100%;
      overflow: auto;
    }

    .sidebar.close .nav-links {
      overflow: visible;
    }

    .sidebar .nav-links::-webkit-scrollbar {
      display: none;
    }

    .sidebar .nav-links li {
      position: relative;
      list-style: none;
      transition: all 0.4s ease;
    }

    /* .sidebar .nav-links li:hover {
    
    } */

    .sidebar .nav-links li .iocn-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .sidebar.close .nav-links li .iocn-link {
      display: block;
    }

    .sidebar .nav-links li i {
      height: auto;
      min-width: 50px;
      text-align: center;
      line-height: 50px;
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .sidebar .nav-links li a {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .sidebar .nav-links li a .link_name {
      font-size: 18px;
      font-weight: 400;
      color: #fff;
      transition: all 0.4s ease;
    }

    .sidebar.close .nav-links li a .link_name {
      opacity: 0;
      pointer-events: none;
    }

    .sidebar .nav-links li .sub-menu {
      padding: 6px 6px 14px 80px;
      margin-top: -10px;
      
      display: none;
    }

    .sidebar .nav-links li.showMenu .sub-menu {
      display: block;
    }

    .sidebar .nav-links li .sub-menu a {
      color: #000;
      font-size: 15px;
      padding: 5px 0;
      white-space: nowrap;
      opacity: 0.6;
      transition: all 0.3s ease;
    }

    .sidebar .nav-links li .sub-menu a:hover {
      opacity: 1;
    }

    .sidebar.close .nav-links li .sub-menu {
      position: absolute;
      left: 100%;
      top: -10px;
      margin-top: 0;
      padding: 6px 20px;
      border-radius: 0 6px 6px 0;
      opacity: 0;
      display: block;
      pointer-events: none;
      transition: 0s;
    }

    .sidebar.close .nav-links li:hover .sub-menu {
      top: 0;
      opacity: 1;
      pointer-events: auto;
      transition: all 0.4s ease;
    }

    .sidebar .nav-links li .sub-menu .link_name {
      display: none;
    }

    .sidebar.close .nav-links li .sub-menu .link_name {
      font-size: 18px;
      opacity: 1;
      display: block;
    }

    .sidebar .nav-links li .sub-menu.blank {
      opacity: 1;
      pointer-events: auto;
      padding: 3px 20px 6px 16px;
      opacity: 0;
      pointer-events: none;
    }

    .sidebar .nav-links li:hover .sub-menu.blank {
      top: 50%;
      transform: translateY(-50%);
    }
  </style>
  <title><?php print("Menu")?></title>
</head>

<body class="h-screen">
  <nav class="inherit top-0 z-50 w-full flex flex-wrap items-center justify-center px-2 py-[0.915rem] bg-neutral-900 drop-shadow-lg ">
    <div class="container flex flex-wrap items-center justify-center">
      <div class=" flex w-full relative flex justify-between items-center lg:w-auto lg:static lg:block lg:justify-start">
        <ul class="flex flex-row">
          <li class="text-white flex flex-row justify-center items-center mr-3.5">
            <i class=" fa-solid fa-bars text-white" id="hamburger"></i>
          </li>
          <li>
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 px-2 py-2 whitespace-nowrap uppercase text-white" href="javascript:void(0);alert('Ya te encuentras en la pagina principal')">
              Sistema Control Vehicular
            </a>
          </li>
        </ul>
      </div>
      <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
          <li class="text-white flex flex-col justify-center items-end px-2">
            <b class="text-xs">Administrador</b>
            <p class="text-xs">username</p>
          </li>
          <li class="flex items-center">
            <button class="bg-white text-neutral-800 active:bg-neutral-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
              Salir <i class="fa-solid fa-right-from-bracket"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="overlay"></div>
  <div class="sidebar close rounded" id="sidebar-close">
    <ul class="nav-links drop-shadow:md">
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-user"></i>
            <span class="link_name">Conductores</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Conductores</a></li>
          <li><a href="../conductores/FConductores.php">Crear</a></li>
          <li><a href="../conductores/SConductores.php">Consultar</a></li>
          <li><a href="../conductores/UConductores.php">Actualizar</a></li>
          <li><a href="../conductores/DConductores.php">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-address-card"></i>
            <span class="link_name">Licencias</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Licencias</a></li>
          <li><a href="FLicencias.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-square-parking"></i>
            <span class="link_name">Multas</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Multas</a></li>
          <li><a href="FMultas.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-shield-halved"></i>
            <span class="link_name">Oficiales</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Oficiales</a></li>
          <li><a href="FOficiales.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-key"></i>
            <span class="link_name">Propietarios</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Propietarios</a></li>
          <li><a href="FPropietarios.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-chalkboard"></i>
            <span class="link_name">Tarjetas</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Tarjetas</a></li>
          <li><a href="FTarjetas.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-car"></i>
            <span class="link_name">Vehiculos</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Vehiculos</a></li>
          <li><a href="FVehiculos.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="fa-solid fa-circle-check"></i>
            <span class="link_name">Verificaciones</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Verificaciones</a></li>
          <li><a href="FVerificaciones.php">Crear</a></li>
          <li><a href="#">Consultar</a></li>
          <li><a href="#">Actualizar</a></li>
          <li><a href="#">Eliminar</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <script src="../assets/js/scripts.js"></script>