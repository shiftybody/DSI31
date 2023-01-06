<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center ">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                Conductores
            </h1>
        </label>
    </div>
    <div class="">
        <form method="POST" action="IConductores.php">
            <label for="fotografia" class="label-form">Fotografia</label>
            <input type="text" id="Fotografia" name="Fotografia" class="input-form" required>
            <br>
            <label for="" class="label-form">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="input-form" required>
            <br>
            <label for="" class="label-form">Apellido Paterno</label>
            <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" class="input-form">
            <br>
            <label for="" class="label-form">Apellido Materno</label>
            <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" class="input-form">
            <br>
            <label for="" class="label-form">Fecha de Nacimiento</label>
            <input type="date" id="FechaNacimiento" name="FechaNacimiento" class="input-form" required>
            <br>
            <label for="" class="label-form">Firma</label>
            <input type="text" id="Firma" name="Firma" class="input-form" required>
            <br>
            <label for="" class="label-form">Domicilio</label>
            <input type="text" id="Domicilio" name="Domicilio" maxlength="100" size="50" class="input-form" required>
            <br>
            <label for="" class="label-form">Grupo Sanguineo</label>
            <select id="GrupoSanguineo" name="GrupoSanguineo" class="input-form" aria-placeholder="" required>
                <option value="">Selecciona una opción</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <div class="flex justify-center flex-wrap items-center py-2">
                <label for="" class="label-form pr-2">Donador</label>
                <input type="radio" id="Donador" name="Donador" value="Si" class="w-4 h-4 mx-1" required> Si
                <input type="radio" id="Donador" name="Donador" value="No" class="w-4 h-4 mx-1" required> No
            </div>

            <label for="" class="label-form">Número Emergencia</label>
            <input type="phone" id="NumEmergencia" name="NumEmergencia" class="input-form" placeholder="123-425-457-8901" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

            <div class="flex justify-center items-center py-2">
                <label for="" class="label-form">Sexo</label>
                <input type="radio" id="Sexo" name="Sexo" value="H" class="w-4 h-4 mx-1" required> Hombre
                <input type="radio" id="Sexo" name="Sexo" value="M" class="w-4 h-4 mx-1" required> Mujer
            </div>
            <label for="" class="label-form">Antiguedad</label>
            <input type="number" id="Antiguedad" name="Antiguedad" class="input-form" min="0" max="99" size="10">
            <label for="" class="label-form">Observaciones</label>
            <textarea id="Observaciones" name="Observaciones" class="input-form" cols="25" rows="4"></textarea>
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