<?php

class Triangle extends Figure
{
    private $a, $b, $c;
    function __construct($a = 0, $b = 0, $c = 0)
    {
        $this->type = '';
        if (($a > 0 ) && ($b > 0) && ($c > 0))
        {

            $sides = array($a,$b,$c);
            $max_side = max($sides); // нахожу самую длиную сторону треугольника
            $max_index = array_search($max_side,$sides);
            unset($sides[$max_index]);
            $min_side = min($sides); // нахожу самую коротку сторону треугольника
            $min_index = array_search($min_side,$sides);
            unset($sides[$min_index]);
            $third_side = array_shift($sides);// извлекаю не самую длиную но и не самую которотку сторону треугольника
            if($max_side<$third_side+$min_side )// проверяю существует ли такой треугольник
            {
                $p = ($a + $b + $c) / 2; // полупериметр
                $this->type = 'Triangle';
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }else{
                $this->type = 'doesn\'t exist';
            }

        }
    }

    public function calc_square()
    {
        if (!$this->type) return '';
        $p = ($this->a + $this->b + $this->c) / 2; // полупериметр
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)); // формула Герона
    }

}