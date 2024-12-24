<?php

class Freno
{
    public int $total;
    public int $parcial = 0;

    public function __construct($total)
    {
        $this->total = $total;
    }

    public function introduceNumeroConVisual()
    {
        for($i = 0; $i < 10; $i++) {

            $num = readline('Introduce num ' . $i + 1 . ': ');
            $this->parcial += $num;
            echo $this->parcial . "\n";
        }

        if($this->parcial == $this->total){
            echo 'Freno activado!!!' . "\n";
        }else {
            echo 'Has fallado!!!' . "\n";
        }
    }

    public function introduceNumeroSinVisual()
    {
        for($i = 0; $i < 10; $i++) {

            $num = readline('Introduce num ' . $i + 1 . ': ');
            $this->parcial += $num;
        }
        
        if($this->parcial == $this->total){
            echo 'Freno activado!!!' . "\n";
        }else {
            echo 'Has fallado!!!' . "\n";
        }
    }
}