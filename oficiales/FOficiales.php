<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center ">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                ALTA DE OFICIALES
            </h1>
        </label>
    </div>
    <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
        <p id="msg"></p>
    </div>
    <div class="mb-6" style="width:22%">
    <form method="GET" action="IOficiales.php">

        <label for="" class="label-form" >Nombre</label>
        <input type="text" class="input-form" id="Nombre" name="Nombre" required maxlength="50">
        <br>
        <label for="" class="label-form" >ApellidoPaterno</label>
        <input type="text" class="input-form" id="ApellidoPaterno" name="ApellidoPaterno" required>
        <br>
        <label for="" class="label-form" >ApellidoMaterno</label>
        <input type="text" class="input-form" id="ApellidoMaterno" name="ApellidoMaterno" required>
        <br>
        <label for="" class="label-form" >Grupo</label>
        <input type="text" class="input-form" id="Grupo" name="Grupo" required>
        <br>
        <label for="" class="label-form" >Firma</label>
        <input type="text" class="input-form" id="Firma" name="Firma" required>
        <br>
            <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                Registrar
            </button>
    </div>
    </form>
</div>

</body>
</html>