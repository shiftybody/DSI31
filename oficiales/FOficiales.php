<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-" >
    <label for="">
        <h1>
            Oficiales
        </h1>
    </label>
    <p></p>
    <form method="GET" action="IOficiales.php">

        <label for="">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required maxlength="50">
        <br>
        <label for="">ApellidoPaterno</label>
        <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" required>
        <br>
        <label for="">ApellidoMaterno</label>
        <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" required>
        <br>
        <label for="">Grupo</label>
        <input type="text" id="Grupo" name="Grupo" required>
        <br>
        <label for="">Firma</label>
        <input type="text" id="Firma" name="Firma" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>

</html>