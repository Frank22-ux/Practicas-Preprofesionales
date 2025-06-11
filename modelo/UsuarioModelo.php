<?php

class UsuarioModelo {
    private $usuarios = [
        'admin' => '1234',
        'usuario' => 'abcd'
    ];

    public function validarUsuario($usuario, $clave) {
        return isset($this->usuarios[$usuario]) && $this->usuarios[$usuario] === $clave;
    }
}
