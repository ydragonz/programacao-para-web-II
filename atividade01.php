<?php

class Usuario {

    private $nome;
    private $sobrenome;

    function __construct($n, $s) {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    function dialogo() {
        echo "Ola, $this->nome $this->sobrenome";

        return $this;
    }

    function registrar() {
        echo ">> registrado";

        return $this;
    }

    function email() {
        echo ">> email enviado";

        return $this;
    }
}

$usuario01 = New Usuario("Leonardo", "Oliveira");
$usuario01->dialogo();

echo "<br>";
echo "<br>";

$usuario02 = New Usuario("Johnny", "Walker");
$usuario02->dialogo();

echo "<br>";
echo "<br>";

$usuarioRambo = New Usuario("Sylvester", "Stallone");
$usuarioRambo->dialogo();

$usuarioJair = New Usuario("Jair", "");

echo "<br>";
echo "<br>";

$usuarioJair->dialogo()->registrar()->email();

?>