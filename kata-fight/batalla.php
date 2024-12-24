<?php
require 'lluitador.php';


class Batalla
{

    public $lluitador1;
    public $lluitador2;

    public $atac;

    public function crearLuitadors()
    {
        $lluitador1 = new Lluitador('Lluitador 1', 10, 50, 50);
        $lluitador2 = new Lluitador('Lluitador 2', 10, 50, 50);
    }

    public function comparaFuerza() {
        $f = $this->lluitador1->força - $this->lluitador2->força;

    }



}
