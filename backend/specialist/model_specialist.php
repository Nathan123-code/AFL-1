<?php

class specialist
{
    public $name;
    public $tipe;
    public $gaji;
    public function __construct($name = '', $tipe = '', $gaji = 0)
    {
        $this->name = $name;
        $this->tipe = $tipe;
        $this->gaji = is_numeric($gaji) ? (int) $gaji : 0;
    }
}

?>