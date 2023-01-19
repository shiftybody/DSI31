<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center pt-" >
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                ALTA DE LICENCIAS
            </h1>
        </label>
    </div>
    <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
        <p id="msg"></p>
    </div>
    <div class="mb-6">
        <form method="GET" action="ILicencias.php">
            <label for="" class="label-form"  >ID Conductor</label>
            <input type="text" id="IDConductor" name="IDConductor" class="input-form" required>
            <br>
            <label for="" class="label-form" >Tipo de Licencia</label>
            <select id="TipoLicencia" name="TipoLicencia" class="input-form" required>
                <option value=""></option>
                <option value="A">AUTOMOVILISTA</option>
                <option value="B">CHOFER PARTICULAR</option>
                <option value="Cc">CHOFER CARGA</option>
                <option value="Co">CHOFER COLECTIVO</option>
                <option value="Ct">CHOFER TAXI</option>
                <option value="D">MOTOCICLETA</option>
                <option value="PM">PERMISO MENOR</option>
            </select>
            <br>
            <label for="" class="label-form">Atributo Desconocido</label>
            <input type="text" id="AtributoDesconocido" name="AtributoDesconocido"  class="input-form" maxlength="11" required>
            <br>
            <label for="" class="label-form" >Fecha Expedicion</label>
            <input type="date" id="fechaExpedicion" name="FechaExpedicion" class="input-form" required readonly>
            <br>
            <label for="" class="label-form" >Vigencia (años)</label>
            <select id="Vigencia" name="Vigencia" class="input-form" required>
                <script>
                        document.write("<option value='" + 3 + "'>" + 3 + "</option>");
                        document.write("<option value='" + 5 + "'>" + 5 + "</option>");
                </script>
            </select>
            <br>
            <label for="" class="label-form">Restricciones</label>
            <textarea id="Restricciones" name="Restricciones" class="input-form" cols="25" rows="4" title="restriccion" placeholder="restriccion"></textarea>
            <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                Registrar
            </button>
            </form>
        </div>

    <!-- js code -->
    <script>
        document.getElementById('fechaExpedicion').valueAsDate = new Date();
    </script>
</div>

</body>
</html>