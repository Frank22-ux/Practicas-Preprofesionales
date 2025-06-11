<?php
require_once 'modelo/UsuarioModelo.php';

class LoginControlador {
    public function manejarSolicitud() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $clave = $_POST['clave'] ?? '';

            $modelo = new UsuarioModelo();
            if ($modelo->validarUsuario($usuario, $clave)) {
                echo "<h2>Bienvenido, $usuario</h2>";
            } else {
                echo "<h2>Usuario o contraseña incorrectos</h2>";
                include 'vista/formularioLogin.php';
            }
        } else {
            include 'vista/formularioLogin.php';
        }
    }
}
