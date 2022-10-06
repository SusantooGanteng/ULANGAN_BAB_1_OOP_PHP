<?php

class Motor{

public $name, $idmesin, $typemotor;

public function __construct($name,$idmesin, $typemotor)
{
$this->name = $name;
$this->idmesin = $idmesin;
$this->typemotor = $typemotor;
}
}

$obj = new Motor("Vario", "1245", "automatic");

echo "Nama: " . $obj->name . '<br>';
echo "ID Mesin: " . $obj->idmesin . '<br>' ;
echo "Type Motor:" . $obj->typemotor . '<hr>';
$obj = new Motor("CB250", "3421", "sport");
echo "Nama: " . $obj->name . '<br>';
echo "ID Mesin: " . $obj->idmesin . '<br>' ;
echo "Type Motor:" . $obj->typemotor . '<hr>';


/* output:
Nama: Vario
ID Mesin: 1245
Type Motor:automatic

Nama: CB250
ID Mesin: 3421
Type Motor:sport */