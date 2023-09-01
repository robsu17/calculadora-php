<?php

namespace app\models;

class Operacao {
    public function somar($a, $b) {
        return $a + $b;
    }

    public function subtracao($a, $b) {
        return $a - $b;
    }

    public function multiplicacao($a, $b) {
        return $a * $b;
    }

    public function divisao($a, $b) {
        if ($a == 0) {
            return 0;
        } else if ($b == 0) {
            return "Não é possível dividir por 0";
        }
        return $a / $b;
    }
}