<?php

class Figure
{
    protected $type = '';
    public function calc_square() {}
    public function getType()
    {
        if ($this->type == '') return 'Неопределен';
        else return $this->type;
    }
}