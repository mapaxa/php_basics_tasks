<?php
//20. Приведите число 20 к типу boolean. Объясните результат.


$a = 20;
settype($a, 'bool');
var_dump($a);

echo '<br>' . 'в PHP любое целое число, кроме нуля, при приведении к булю будет равно true. ';
 ?>