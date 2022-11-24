<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conductores</title>
</head>

<body>
    <label for="">
        <h1>
            Conductores
        </h1>
    </label>
    <p></p>
    <form method="POST" action="UConductores.php">
        <label for=""><strong> Ingrese el ID del conductor</strong></label>
        <input type="text" name="IDConductor" id="IDConductor" value="<?php print($_GET['IDConductor']);?>" readonly>
        <br>
        <label for="">Fotografia</label>
        <input type="text" id="Fotografia" name="Fotografia" value="<?php print($_GET['Fotografia']);?>" required>
        <br>
        <label for="">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php print($_GET['Nombre'])?>" required>
        <br>
        <label for="">Apellido Paterno</label>
        <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php print($_GET['ApellidoPaterno'])?>">
        <br>
        <label for="">Apellido Materno</label>
        <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php print($_GET['ApellidoMaterno'])?>">
        <br>
        <label for="">FechaNacimiento</label>
        <input type="date" id="FechaNacimiento" name="FechaNacimiento" value="<?php print($_GET['FechaNacimiento'])?>" required>
        <br>
        <label for="">Firma</label>
        <input type="text" id="Firma" name="Firma" value="<?php print($_GET['Firma'])?>" required>
        <br>
        <label for="">Domicilio</label>
        <input type="text" id="Domicilio" name="Domicilio" maxlength="100" size="50" value="<?php print($_GET['Domicilio'])?>" required>
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
        <input type="radio" id="Donador" name="Donador" value="Si"  required> Si
        <input type="radio" id="Donador" name="Donador" value="No" required> No
        <br>
        <label for="">Número Emergencia</label>
        <input type="phone" id="NumEmergencia" name="NumEmergencia" 
            placeholder="123-425-457-8901"
            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}"
            value="<?php print($_GET['NumEmergenica'])?>"
            required>
        <br>
        <label for="">Sexo</label>
        <input type="radio" id="Sexo" name="Sexo" value="H" required> Hombre
        <input type="radio" id="Sexo" name="Sexo" value="M" required> Mujer
        <br>
        <label for="">Antiguedad</label>
        <input type="number" id="Antiguedad" name="Antiguedad" value="<?php print($_GET['Antiguedad'])?>" min="0" max="99" size="10">
        <br>
        <label for="">Observaciones</label>
        <br>
        <textarea id="Observaciones" name="Observaciones" cols="25" rows="4"></textarea>
        <br>
        <input type="submit" value="enviar">
        <br>
    </form>
</body>

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


        $SQL="UPDATE conductores SET Fotografia='$Fotografia', Nombre='$Nombre', 
        ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
        FechaNacimiento='$FechaNacimiento', Firma='$Firma', Domicilio='$Domicilio', 
        GrupoSanguineo='$GrupoSanguineo', Donador='$Donador', NumEmergencia='$NumEmergencia', 
        Sexo='$Sexo', Antiguedad='$Antiguedad', Observaciones='$Observaciones' 
        WHERE IDConductor='$IDConductor'";
        
        include("Conexion.php");
        $Con=Conectar();
        $Result=Ejecutar($Con,$SQL);
        $FilasAfectadas=mysqli_affected_rows($Con);
        if($FilasAfectadas>0){
            echo "Se actualizaron $FilasAfectadas registros";
        } else{
            echo "No se actualizaron registros";
        }
        Cerrar($Con);      
    }
?>