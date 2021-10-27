<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    function Tratar($usuario,$senha){
        $usuario_tratado = 'Bem vindo ' . $usuario .'.';
        $senha_tratada = md5($senha);

        return view('mostrar_usuario', compact('usuario_tratado','senha_tratada'));
    }
}
