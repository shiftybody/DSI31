<?php

    session_start(); 

    if($_SESSION['rol'] == 'user'){
      header("location: MenuU.php");
      die();
      
    } else if ($_SESSION['rol'] == 'admin') {
      // do nothing
    } else {
    session_destroy();
    header("Location: ../index.php");
  }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr" style="overflow: overlay;">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../node_modules/@fortawesome/fontawesome-free/svgs/solid/car-side.svg" />
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css" />
  <link rel="stylesheet" href="../assets/css/styles.css" >
  <link rel="stylesheet" href="../assets/css/header/styles.css">
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
            <p class="text-xs"><?php isset($_SESSION['usuario']) ? print($_SESSION['usuario']) : null?></p>
          </li>
          <li class="flex items-center">    
            <a href="../CerrarSession.php">
              <button  class="bg-white text-neutral-800 active:bg-neutral-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                Salir <i class="fa-solid fa-right-from-bracket"></i>
              </button>
            </a>  
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
          <li><a href="../conductores/FConductores.php">Alta</a></li>
          <li><a href="../conductores/SConductores.php">Consultar</a></li>
          <li><a href="../conductores/UConductores.php">Modificar</a></li>
          <li><a href="../conductores/DConductores.php">Elimminar</a></li>
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
          <li><a href="../licencias/FLicencias.php">Alta</a></li>
          <li><a href="../licencias/SLicencias.php">Consultar</a></li>
          <li><a href="../licencias/ULicencias.php">Modificar</a></li>
          <li><a href="../licencias/DLicencias.php">Eliminar</a></li>
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
          <li><a href="../multas/Fmultas.php">Alta</a></li>
          <li><a href="../multas/Smultas.php">Consultar</a></li>
          <li><a href="../multas/Umultas.php">Modificar</a></li>
          <li><a href="../multas/Dmultas.php">Eliminar</a></li>
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
          <li><a href="../oficiales/FOficiales.php">Alta</a></li>
          <li><a href="../oficiales/Soficiales.php">Consultar</a></li>
          <li><a href="../oficiales/Uoficiales.php">Modificar</a></li>
          <li><a href="../oficiales/Doficiales.php">Eliminar</a></li>
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
          <li><a href="../propietarios/FPropietarios.php">Alta</a></li>
          <li><a href="../propietarios/SPropietarios.php">Consultar</a></li>
          <li><a href="../propietarios/UPropietarios.php">Modificar</a></li>
          <li><a href="../propietarios/DPropietarios.php">Eliminar</a></li>
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
          <li><a href="../tarjetas/FTarjetas.php">Alta</a></li>
          <li><a href="../tarjetas/STarjetas.php">Consultar</a></li>
          <li><a href="../tarjetas/UTarjetas.php">Modificar</a></li>
          <li><a href="../tarjetas/DTarjetas.php">Eliminar</a></li>
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
          <li><a href="../vehiculos/FVehiculos.php">Alta</a></li>
          <li><a href="../vehiculos/SVehiculos.php">Consultar</a></li>
          <li><a href="../vehiculos/UVehiculos.php">Modificar</a></li>
          <li><a href="../vehiculos/DVehiculos.php">Eliminar</a></li>
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
          <li><a href="../verificaciones/FVerificaciones.php">Alta</a></li>
          <li><a href="../verificaciones/SVerificaciones.php">Consultar</a></li>
          <li><a href="../verificaciones/UVerificaciones.php">Modificar</a></li>
          <li><a href="../verificaciones/DVerificaciones.php">Eliminar</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <script src="../assets/js/scripts.js">
    
  </script>