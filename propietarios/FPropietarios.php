<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-">
    <label for="">
        <h1>
            Propietarios
        </h1>
    </label>
    <p></p>
    <form method="POST" action="IPropietarios.php">
        <label for="">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required>
        <br>
        <label for="">ApellidoPaterno</label>
        <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" required>
        <br>
        <label for="">ApellidoMaterno</label>
        <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" required>
        <br>
        <label for="">Localidad</label>
        <input type="text" id="Localidad" name="Localidad" required>
        <br>
        <label for="">Municipio</label>
        <input type="text" id="Municipio" name="Municipio" required>
        <br>
        <label for="">RFC</label>
        <input type="text" id="RFC" name="RFC" required minlength="10" maxlength="13">
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>

</html>