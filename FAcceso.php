<?php

   session_start();

    if(isset($_SESSION['rol'])){
      if($_SESSION['rol'] == 'admin'){
        header("Location: menu/menuA.php");
      } else if ($_SESSION['rol'] == 'user') {
        header("Location: menu/menuU.php");
      } else {
        session_destroy();
      }
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="node_modules/@fortawesome/fontawesome-free/svgs/solid/car-side.svg" />
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>Login</title>
</head>

<body class="text-neutral-800 antialiased bg-neutral-900">
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-sm font-bold leading-relaxed inline-block mr-4 px-2 py-2 whitespace-nowrap uppercase text-white"
          href="">
          Sistema Control Vehicular
        </a>
      </div>
      <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
        id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none mr-auto">
          <li class="flex items-center">
            <a class="lg:text-white lg:hover:text-neutral-300 text-neutral-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="https://docs.google.com/document/d/1ArUK2-rRTqGY4pwkMdbyCTsUTteyOKmqg6fqhnPs14A/edit?usp=sharing" target="_blank"><i
                class="lg:text-neutral-300 text-neutral-500 far fa-file-alt text-lg leading-lg mr-2"></i>
              Documentacion</a>
          </li>
        </ul>
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
          <li class="flex items-center">
            <a class="lg:text-white lg:hover:text-neutral-300 text-neutral-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="https://github.com/shiftybody/DSI31" target="_blank" ><i class="lg:text-neutral-300 text-neutral-500 fab fa-github text-lg leading-lg "></i><span
                class="lg:hidden inline-block ml-2">Star</span></a>
          </li>
          <li class="flex items-center">
            <button
              class="bg-white text-neutral-800 active:bg-neutral-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
              type="button" style="transition: all 0.15s ease 0s;">
              <a href="https://github.com/shiftybody/DSI31/archive/refs/heads/main.zip">
                <i class="fas fa-arrow-alt-circle-down"></i> Descargar Código</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <section class="absolute w-full h-full">
      <div class="absolute top-0 w-full h-full bg-neutral-900"
        style="background-image: url(assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;">
      </div>
      <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-0 shadow-lg rounded-lg bg-neutral-300 border-0">
              <div class="rounded-t mb-0 px-6 py-6 pt-9">
                <div class="text-center mb-3">
                  <h6 class="text-neutral-800 text-sm font-bold">
                    <i class="fa-solid fa-car-side text-6xl drop-shadow-md"></i>
                  </h6>
                </div>
              </div>
              <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
                <p id="msg" ></p>
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form method="post" action="ValidaAcceso.php">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-neutral-700 text-xs font-bold mb-2" for="username">Usuario
                    </label>
                    <input type="text" id="username" name="username" class="input-login" placeholder="Nombre de usuario"
                      style="transition: all 0.15s ease 0s;" required />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-neutral-700 text-xs font-bold mb-2" for="password">Contraseña
                    </label>
                    <input type="password" id="password" name="pws" class="input-login" placeholder="••••••••••"
                      style="transition: all 0.15s ease 0s;" required />
                  </div>
                  <!-- <div>
                    <label class="block uppercase text-neutral-700 text-xs font-bold mb-2"
                      for="grid-key">Llave</label><input type="file" placeholder="file.txt"
                      class="input-file" required/>
                  </div> -->
                  <hr class="mt-6 border-b-1 border-neutral-400" />
                  <br>
                  <div class="text-center mt-6">
                    <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                      Iniciar Sesión
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
<script src="./assets/js/login.js"></script>

</html>