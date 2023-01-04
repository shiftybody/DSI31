<?php include 'MenuA.php' ?>

<div class="flex flex-col items-center pt-">
    <label for="">
        <h1>
            Conductores
        </h1>
    </label>
    <p></p>

    <form method="POST" action="IConductores.php">
        <label for="">Fotografia</label>
        <input type="text" id="Fotografia" name="Fotografia" required>
        <br>
        <label for="">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required>
        <br>
        <label for="">Apellido Paterno</label>
        <input type="text" id="ApellidoPaterno" name="ApellidoPaterno">
        <br>
        <label for="">Apellido Materno</label>
        <input type="text" id="ApellidoMaterno" name="ApellidoMaterno">
        <br>
        <label for="">FechaNacimiento</label>
        <input type="date" id="FechaNacimiento" name="FechaNacimiento" required>
        <br>
        <label for="">Firma</label>
        <input type="text" id="Firma" name="Firma" required>
        <br>
        <label for="">Domicilio</label>
        <input type="text" id="Domicilio" name="Domicilio" maxlength="100" size="50" required>
        <br>
        <label for="">GrupoSanguineo</label>
        <select id="GrupoSanguineo" name="GrupoSanguineo" required>
            <option value=""></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br>
        <label for="">Donador</label>
        <input type="radio" id="Donador" name="Donador" value="Si" required> Si
        <input type="radio" id="Donador" name="Donador" value="No" required> No
        <br>
        <label for="">Número Emergencia</label>
        <input type="phone" id="NumEmergencia" name="NumEmergencia" placeholder="123-425-457-8901" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
        <br>
        <label for="">Sexo</label>
        <input type="radio" id="Sexo" name="Sexo" value="H" required> Hombre
        <input type="radio" id="Sexo" name="Sexo" value="M" required> Mujer
        <br>
        <label for="">Antiguedad</label>
        <input type="number" id="Antiguedad" name="Antiguedad" min="0" max="99" size="10">
        <br>
        <label for="">Observaciones</label>
        <br>
        <textarea id="Observaciones" name="Observaciones" cols="25" rows="4"></textarea>
        <br><br>
        <input type="submit" value="enviar">
    </form>
</div>

</body>
</html>