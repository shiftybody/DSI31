<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-" >
    <label for="">
        <h1>
            Licencias
        </h1>
    </label>
    <p></p>
    <form method="GET" action="ILicencias.php">
        <label for="">ID Conductor</label>
        <input type="text" id="IDConductor" name="IDConductor" required>
        <br>
        <label for="">Tipo de Licencia</label>
        <select id="TipoLicencia" name="TipoLicencia" required>
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
        <label for="">Atributo Desconocido</label>
        <input type="text" id="AtributoDesconocido" name="AtributoDesconocido" maxlength="11" required>
        <br>
        <label for="">Fecha Expedicion</label>
        <input type="date" id="fechaExpedicion" name="FechaExpedicion" required readonly>
        <br>
        <label for="">Vigencia</label>
        <select id="Vigencia" name="Vigencia" required>
            <script>
                for (var i = 1; i <= 10; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
        <label for=""> años </label>
        <br>
        <label for="">Restricciones</label>
        <br>
        <textarea id="Restricciones" name="Restricciones" cols="25" rows="4" title="restriccion" placeholder="restriccion"></textarea>
        <br><br>
        <input type="submit" value="enviar">
    </form>
    <!-- js code -->
    <script>
        document.getElementById('fechaExpedicion').valueAsDate = new Date();
    </script>
</div>
</body>
</html>