<?php
//5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).
require_once '2.php'; //$age

if($age >= 18 && $age <= 59) {
	echo 'Вам еще работать и работать';
}



 ?>