<html>
<meta charset="utf-8">
<label for="">
    <h1>
        Conductores
    </h1>
</label>
<p></p>
<form method="POST" action="UConductores.php">
    <label for="">ID Conductor</label>
    <input type="text" name="IDConductor" id="IDConductor" placeholder="1">
    <br>
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
    <input type="text" id="FechaNacimiento" name="FechaNacimiento" required>
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
    <input type="text" id="Donador" name="Donador" required>
    <br>
    <label for="">Número Emergencia</label>
    <input type="text" id="NumEmergencia" name="NumEmergencia" placeholder="123-425-457-8901"
        pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
    <small>Formato: 000-123-456-7890</small>
    <br>
    <label for="">Sexo</label>
    <input type="text" id="Sexo" name="Sexo"  required>
    <br>
    <label for="">Antiguedad</label>
    <input type="text" id="Antiguedad" name="Antiguedad" min="0" max="99" size="10">
    <br>
    <label for="">Observaciones</label>
    <br>
    <textarea id="text" name="Observaciones" cols="25" rows="4"></textarea>
    <br><br>
    <input type="submit" value="enviar">
</form>

</html>

<?php
    if(isset($_POST['IDConductor'])){

        $IDConductor = $_POST['IDConductor'];
        $Fotografia = $_POST['Fotografia'];
        $Nombre = $_POST['Nombre'];
        $ApellidoPaterno = $_POST['ApellidoPaterno'];
        $ApellidoMaterno = $_POST['ApellidoMaterno'];
        $FechaNacimiento = $_POST['FechaNacimiento'];
        $Firma = $_POST['Firma'];
        $Domicilio = $_POST['Domicilio'];
        $GrupoSanguineo = $_POST['GrupoSanguineo'];
        $Donador = $_POST['Donador'];
        $NumEmergencia = $_POST['NumEmergencia'];
        $Sexo = $_POST['Sexo'];
        $Antiguedad = $_POST['Antiguedad'];
        $Observaciones = $_REQUEST['Observaciones'];

        print("Actualizar ");

        $SQL="UPDATE conductores SET Fotografia='$Fotografia', Nombre='$Nombre', 
        ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
        FechaNacimiento='$FechaNacimiento', Firma='$Firma', Domicilio='$Domicilio', 
        GrupoSanguineo='$GrupoSanguineo', Donador='$Donador', NumEmergencia='$NumEmergencia', 
        Sexo='$Sexo', Antiguedad='$Antiguedad', Observaciones='$Observaciones' 
        WHERE IDConductor='$IDConductor'";

        print("<br>".$SQL);

        ///eNVIAR AL SMDB
        include("Conexion.php");
        $Con=Conectar();
        $Result=Ejecutar($Con,$SQL);
        $FilasAfectadas=mysqli_affected_rows($Con);
        print("Numero de Filas afectadas:".$FilasAfectadas);
        Cerrar($Con);      

    }
?>