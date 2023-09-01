<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Operacao;

class CalculaController extends Controller
{
    public function index() {
        $dados["view"] = "home";
        $this->load("template", $dados);
    }

    public function somar() {
        $objOperacao = new Operacao();
        $a = isset($_POST["a"]) ? $_POST["a"] : 0;
        $b = isset($_POST["b"]) ? $_POST["b"] : 0;
        $dados["valueA"] = $a;
        $dados["valueB"] = $b;
        $dados["resultado"] = $objOperacao->somar($a, $b);
        $dados["view"] = "Somar";
        $this->load("template", $dados);
    }

    public function subtrair() {
        $objOperacao = new Operacao();
        $a = isset($_POST["a"]) ? $_POST["a"] : 0;
        $b = isset($_POST["b"]) ? $_POST["b"] : 0;
        $dados["resultado"] = $objOperacao->subtracao($a, $b);
        $dados["view"] = "Subtrair";
        $this->load("template", $dados);
    }

    public function multiplicar() {
        $objOperacao = new Operacao();
        $a = isset($_POST["a"]) ? $_POST["a"] : 0;
        $b = isset($_POST["b"]) ? $_POST["b"] : 0;
        $dados["resultado"] = $objOperacao->multiplicacao($a, $b);
        $dados["view"] = "Multiplicar";
        $this->load("template", $dados);
    }

    public function dividir() {
        $objOperacao = new Operacao();
        $a = isset($_POST["a"]) ? $_POST["a"] : 0;
        $b = isset($_POST["b"]) ? $_POST["b"] : 0;
        $dados["resultado"] = $objOperacao->divisao($a, $b);
        $dados["view"] = "Dividir";
        $this->load("template", $dados);
    }
}