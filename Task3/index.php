<?php
require_once '__autoload.php';
require_once 'functions.php';

$input = ['Circle', 'Rectangle', 'Triangle'];
for ($i = 0; $i < 3; $i++) {
    $ind = array_rand($input, 1);
    $massRandObj[] = $input[$ind];
}

var_dump($massRandObj);
foreach ($massRandObj as $object) {

    switch ($object) {
        case 'Circle':
            $param = rand(1, 100);
            $massObj[] = new Circle($param);
            break;
        case 'Rectangle':
            $param1 = rand(1, 100);
            $param2 = rand(1, 100);
            $massObj[] = new Rectangle($param1, $param2);
            break;
        case 'Triangle':
            $param1 = rand(1, 100);
            $param2 = rand(1, 100);
            $param3 = rand(1, 100);
            $massObj[] = new Triangle($param1, $param2, $param3);
            break;
    }
}
echo "<br />";
echo "Записанный в файл массив объектов: <br />";
echo "<br />";
if ($massObj) {
    foreach ($massObj as $object) {
        echo $object->getType(), ' , Площадь=', $object->calc_square() . '<br>';
    }
}


$filename = "text.obj";
writeToFile($massObj, $filename);
$massObj = readFromFile($filename);
echo "<br />";
echo "Считанный из файла массив объектов: <br />";
echo "<br />";
if ($massObj) {
    foreach ($massObj as $object) {
        echo $object->getType(), ' , Площадь=', $object->calc_square() . '<br>';
        $order_by_desс[$object->calc_square()] = $object->getType();
    }
}
echo "<br />";
echo "Отсортированые фигуры по убыванию площади: <br />";
krsort($order_by_desс);
echo "<br>";
foreach ($order_by_desс as $value => $object) {
    echo $object . " " . $value . "; ";
}