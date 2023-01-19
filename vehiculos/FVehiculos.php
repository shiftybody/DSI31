<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center ">
    <div class="py-8 uppercase font-bold">
        <label for="vehiculos">
            <h1>
                ALTA DE VEHICULOS
            </h1>
        </label>
    </div>
    <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
        <p id="msg"></p>
    </div>
    <div class="mb-6" style="width:22%;">
<form method="GET" action="IVehiculos.php">
    <label for="" class="label-form">NIV</label>
    <input type="text" class="input-form" id="NIV" name="NIV" minlength="17" required>
    <br>
    <label for="" class="label-form">Modelo</label>
    <select class="input-form" id="Modelo" name="Modelo" required>
        <option value=""></option>
        <script>
            const currentYear = new Date().getFullYear();
            for (let i = currentYear; i >= 1800; i--) {
                document.write("<option value='" + i + "'>" + i + "</option>");
            }
        </script>
    </select>
    <br>
    <label for="" class="label-form">Marca</label required>
    <input type="text" class="input-form" id="Marca" name="Marca">
    <br>
    <label for="" class="label-form">Linea</label required>
    <input type="text" class="input-form" id="Linea" name="Linea">
    <br>
    <label fo="" class="label-form">Sublinea</label>
    <input type="text" class="input-form" id="Sublinea" name="Sublinea">
    <br>
    <label for="" class="label-form">Origen</label>
    <select name="Origen" class="input-form" id="Origen" required>
        <option value=""></option>
        <option value="Nacional">Nacional</option>
        <option value="Importado">Importado</option>
    </select>
    <br>
    <label for="" class="label-form">Color</label>
    <input type="text" class="input-form" id="Color" name="Color" required>
    <br>
    <label for="" class="label-form">Clase</label>
    <input type="text" class="input-form" id="Clase" name="Clase" required>
    <br>
    <label for="" class="label-form">Tipo de Vehiculo</label>
    <input type="text" class="input-form" id="TipoVehiculo" name="TipoVehiculo" required>
    <br>
    <label for="" class="label-form">Numero de cilindros</label>
    <input type="number" class="input-form" id="NumCilindros" name="NumCilindros" size="4" min="1" max="99" required>
    <br>
    <label for="" class="label-form">Capacidad</label>
    <input type="number" class="input-form" id="Capacidad" name="Capacidad" size="4" min="0" max="20" required>
    <br>
    <label for="" class="label-form">Numero de Puertas</label>
    <input type="number" class="input-form" id="NumPuertas" name="NumPuertas" size="4" min="0" max="20" >
    <br>
    <label for="" class="label-form">Numero de Asientos</label>
    <input type="number" class="input-form" id="NumAsientos" name="NumAsientos" size="4" min="1" max="99" required>
    <br>
    <label for="" class="label-form">Combustible</label>
    <select name="Combustible" class="input-form" id="Combustible" required>
        <script>
            const combustibles = ["","Gasolina", "Gas LP", "Gas Natural", "Diesel", "Electrico", "Manual", "Otro", "No usa"];
            for (let i = 0; i < combustibles.length; i++) {
                document.write("<option value='" + combustibles[i] + "'>" + combustibles[i] + "</option>");
            }
        </script>
    </select>
    <br>
    <label for="" class="label-form">Transmision</label>
    <select name="Transmision" class="input-form" id="Transmision" required>
        <script>
            const transmisiones = ["", "Automatica", "Estandar", "Otro"];
            for (let i = 0; i < transmisiones.length; i++) {
                document.write("<option value='" + transmisiones[i] + "'>" + transmisiones[i] + "</option>");
            }
        </script>
    </select>
    <br>
    <label>Numero de motor</label>
    <input type="text" class="input-form" id="NumMotor" name="NumMotor" minlength="11" maxlength="11"  required>
    <br>
    <label for="" class="label-form">Numero de serie</label>
    <input type="text" class="input-form" id="NumSerie" name="NumSerie" minlength="12" >
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