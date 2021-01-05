<?php

namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}