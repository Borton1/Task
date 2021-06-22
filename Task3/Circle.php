<?php

class Circle extends Figure
{
    private $radius;
    function __construct($r = 0)
    {
        $this->type = '';
        $r = floatval($r);
        if ($r > 0)
        {
            $this->type = 'Circle';
            $this->radius = $r;
        }

    }
    public function calc_square()
    {
        if (!$this->type) return '';
        return M_PI * $this->radius * $this->radius;
    }

}