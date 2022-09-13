<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dados['nome_sitema']="CARROS";
        $dados['titulo']="HOME | ".$dados['nome_sitema'];
        $dados['body']="home";
        return view('index', $dados);
    }
}
