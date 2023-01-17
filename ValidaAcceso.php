<?php

    session_start();    
    
    ob_start();
    include './FAcceso.php';

    $msg = '';
    
    $username = $_POST['username'];
    $password = $_POST['pws'];

    $_SESSION['usuario'] = $username;

    $SQL = "SELECT * FROM cuentas WHERE username = '$username'";

    include("conexion.php");
    $link = Conectar();
    $result = Ejecutar($link, $SQL);

    $n = mysqli_num_rows($result);

    $Fila = mysqli_fetch_row($result);

    if($n == 1)
    {
        // print(" El usuario existe ");
        $msg = $msg . ' El usuario existe';
        if($password == $Fila[1])
        {
            // print(" La contraseña es correcta ");
            $msg = $msg . ' La contraseña es correcta';
            $SQL4 = "UPDATE cuentas SET intentos = 0 WHERE username = '$username'";
            Ejecutar($link, $SQL4);

            if($Fila[3] == 1)
            {
                // print(" Usuario activo ");
                $msg = $msg . ' Usuario activo';
                if($Fila[5] == 0)
                {
                    // print(" Usuario desbloqueado ");
                    $msg = $msg . ' Usuario desbloqueado';
                    if($Fila[2] == 'A')
                    {

                        $msg = $msg . 'Eres admin';
                        $_SESSION['rol'] = 'admin';
                        header("Location: menu/MenuA.php");
                        // print(" Eres admin ");
                       
                    }
                    else
                    {
                        $msg = $msg . 'Eres Usuario';
                        $_SESSION['rol'] = 'user';
                        header("Location: menu/MenuU.php");
                        print(" Eres User ");
                    
                       
                    }
                }
                else
                {
                    // print("Usuario bloqueado");
                    $msg = $msg . ' Usuario bloqueado';
                }
            }
            else
            {
                // print("Usuario inactivo");
                $msg = $msg . ' Usuario inactivo';
            }
        }
        else
        {
            // print("Contraseña incorrecta");
            $msg = $msg . ' Contraseña incorrecta';
            $SQL2 = "UPDATE cuentas SET intentos = intentos + 1 WHERE username = '$username'";
            Ejecutar($link, $SQL2);
            if($Fila[4] >= 3)
            {
                $SQL3 = "UPDATE cuentas SET bloqueado = 1 WHERE username = '$username'";
                Ejecutar($link, $SQL3);
            }
        }
    }
    else
    {
        // print("El usuario no existe");
        $msg = $msg . ' El usuario no existe';
    }

    Cerrar($link);

        echo "<script>";
        echo 'console.log("' . $msg .'");';
        echo 'validacion("' . $msg . '");';
        echo "</script>";

      
?>
