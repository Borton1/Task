<?php
//(?<=[_])*(\w+)
//(?<=[_])*(\w+)
const UNDERSCORE = '_';
$str1 = 'get-books-count';
$str2 = 'Set_Currency_Value';
/**
 * @param string $str
 * @return mixed|string
 */
function getCamelCase(string $str)
{

    if(strpos($str, UNDERSCORE))
    {
        $res = explode("_", $str);
    }else{
        $res = explode("-", $str);
    }

    $firstword = array_shift($res);

    for($i = 0; $i < count($res); $i++)
    {
        $res[$i][0] = strtoupper($res[$i][0]);
    }
    for($i = 0; $i < count($res); $i++)
    {
        $firstword .= $res[$i];
    }
    return $firstword;
}
echo getCamelCase($str1);
echo "<br />";
echo getCamelCase($str2);