<?php
class Lluitador {

    private string $nom;
    private int $vida = 10;
    private int $força;
    private int $defensa;

    public function __construct(string $nom, int $vida, int $força, int $defensa){
        $this->nom = $nom;
        $this->vida = $vida;
        $this->força = $força;
        $this->defensa = $defensa;

    }

}

?>