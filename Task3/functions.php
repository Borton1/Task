<?php
/**
 * @param $value - массив объектов
 * @param $filename - имя файла
 */
function writeToFile($value, $filename)
{
    $str_value = serialize($value);

    $fd = fopen($filename, 'w');
    fwrite($fd, $str_value);
    fclose($fd);
}


/**
 * @param $filename - имя файла
 * @return mixed - возврат массива объектов
 */
function readFromFile($filename)
{
    $file = file_get_contents($filename);
    $value = unserialize($file);
    return $value;
}