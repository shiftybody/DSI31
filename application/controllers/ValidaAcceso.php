<?php
    $username = $_POST['username'];
    $password = $_POST['pws'];

    print($username."-----".$password);

    $SQL = "SELECT * FROM cuentas WHERE username = '$username'";

    include("conexion.php");
    $link = Conectar();
    $result = Ejecutar($link, $SQL);

    $n = mysqli_num_rows($result);

    $Fila = mysqli_fetch_row($result);

    if($n == 1)
    {
        print("El usuario existe");
        if($password == $Fila[1])
        {
            print("La contraseña es correcta");
            $SQL4 = "UPDATE cuentas SET intentos = 0 WHERE username = '$username'";
            Ejecutar($link, $SQL4);
            if($Fila[3] == 1)
            {
                print("Usuario activo");
                if($Fila[5] == 0)
                {
                    print("Usuario desbloqueado");
                    if($Fila[2] == 'A')
                    {
                        print("Eres administrador");
                        header("Location: MenuA.php");
                    }
                    else
                    {
                        print("Eres mortal");
                        header("Location: MenuU.php");
                    }
                }
                else
                {
                    print("Usuario bloqueado");
                }
            }
            else
            {
                print("Usuario inactivo");
            }
        }
        else
        {
            print("Contraseña incorrecta");
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
        print("El usuario no existe");
    }
    Cerrar($link);

    header('HTTP/1.1 307 Temporary Redirect');
    header('Location:../views/FAcceso.html');
?>