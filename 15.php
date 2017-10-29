<?php
//15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
?>


<?php 
if((filter_has_var(INPUT_GET, 'a') && !empty($_GET['a'])) &&
   (filter_has_var(INPUT_GET, 'b') && !empty($_GET['b'])) &&
   (filter_has_var(INPUT_GET, 'operator') && !empty($_GET['operator']))
 	) {
	$a = trim($_GET['a']);
	$b = trim($_GET['b']);
	$operator = trim($_GET['operator']);



	if ( !is_numeric($a) ) {echo 'введите валидное 1 число' . '<br>';}
	if ( !is_numeric($b) ) {echo 'введите валидное 2 число' . '<br>';}

	$result = "$a $operator $b = ";

	if($operator == '+') {
		$result .= $a + $b; 
	}
	elseif($operator == '-') {
		$result .= $a - $b;	
	}
	elseif($operator == '*') {
		$result .= $a * $b;	
	}
	elseif($operator == '/') {
		if($b == 0){
			$result = 'на 0 делить нельзя';
		}
		else {
			$result = $a / $b;
		}
	}
	elseif($operator == '%'){
		$result .= $a % $b;
	}
	else {
		$result = 'оператором может быть только один из следующих символов \'+\', \'-\', \'*\', \'-\', \'%\' .  ';
	}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="">
		<div><label for="a"> число a</label></div>
		<input type="number" name="a" >
		<div><label for="operator"> оператор</label></div> 
		<input type="text" name="operator">
		<div><label for="b"> число b</label></div>
		<input type="number" name="b">
		<div>
			<input type="submit" name="submit" value="calculate">
		</div>
	</form>

	<?php if(isset($result)) { echo $result; }  ?> 



</body>
</html>