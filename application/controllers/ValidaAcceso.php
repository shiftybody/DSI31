<link rel="stylesheet" type="text/css" href="EForms.css">

<?php

session_start();
$FUserName = $_POST['UserName'];
$FPassword = $_POST['Password'];
$FKey = $_POST['Key'];


include("Conexion.php");
$Con = Conectar();
$SQL = "SELECT * FROM Cuentas WHERE UserName = '$FUserName';";
$Result = Ejecutar($Con, $SQL);
$Existe = mysqli_num_rows($Result);
$Manejador = fopen("$FKey", "r");

for ($i = 0; $i <= !feof($Manejador); $i++) {
    $Leer = fgets($Manejador);
}
?>
<html>
<header id="cabecera">
    <a id="logo" href="FAcceso.html">
        <span class="site-name">SISTEMA DE CONTROL VEHICULAR</span>
    </a>
</header>
<p>
    <?php
    if ($Existe == 1) {
        print("<label>El usuario existe</label><br>");
        $Fila = mysqli_fetch_row($Result);
        if ($Fila[1] == $FPassword) {
            print("<label>Contraseña correcta</label><br>");
            if ($Fila[3] == 1) {
                print("<label>Cuenta activa</label><br>");
                if ($Fila[4] == 0) {
                    print("<label>Cuenta sin bloqueo</label><br>");

                    if ($Fila[2] == "A") {
                        if ($Fila[6] == $Leer) {
                            print("<label>Key correcta</label><br>");
                            print("<label>ENTRAR</label><br>");
                            $_SESSION['Bandera'] = 1;
                            print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuA.php">');
                        } else {
                            print("<label>La Key es incorrecta</label><br>");
                        }
                    } else {
                        if ($Fila[2] == "U") {
                            if ($Fila[6] == $Leer) {
                                print("<label>Key correcta</label><br>");
                                print("<label>ENTRAR</label><br>");
                                $_SESSION['BanderaU'] = 1;
                                print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuU.php">');
                            } else {
                                print("<label>La Key es incorrecta</label><br>");
                            }
                        } else {
                            print("<label>Tipo de usuario no valido</label><br>");
                        }
                    }
                } else {
                    print("<label>Cuenta bloqueada</label><br>");
                }
            } else {
                print("<label>Cuenta NO activa</label><br>");
            }
        } else {
            print("<label>Contraseña incorrecta</label><br>");
            if ($Fila[5] < 4) {
                $SQL1 = "UPDATE Cuentas SET Intentos = Intentos + 1 WHERE UserName = '$FUserName' ";
                $Result1 = Ejecutar($Con, $SQL1);
            } else {
                $SQL2 = "UPDATE Cuentas SET Bloqueado = 1 WHERE UserName = '$FUserName' ";
                $Result2 = Ejecutar($Con, $SQL2);
                print("<label>Cuenta bloqueada</label><br>");
            }
        }
    } else {
        print("<label>El usuario NO existe</label><br>");
    }
    print("</html>");
    Desconectar($Con);
    ?>