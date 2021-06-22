<?php

class Rectangle extends Figure
{
    private $side;
    private $side2;
    function __construct($a = 0,$b = 0)
    {
        $this->type = '';
        $a = floatval($a);
        $b = floatval($b);
        if ($a > 0 && $b > 0)
        {
            $this->type = 'Rectangle';
            $this->side = $a;
            $this->side2 = $b;
        }
    }
    public function calc_square()
    {
        if (!$this->type) return '';
        return $this->side * $this->side2;
    }
}