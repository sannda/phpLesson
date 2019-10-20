<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Основы языка PHP</h1>
<div class="block">
	<h3>Типы переменных</h3>
<?php
// variables
	$string = "text"; // строчная переменная
	$integer = 777; // числовая переменная
	$boolean = true; // истина ложь
	$null = null; // нулевая переменная
//
	$monday = "Понедельник";
	$teusday = "Вторник";
	$wednsday = "Среда";
	$thursday = "Четверг";

	$name  = "Оксана";
	$breast = 85;

// Можно вывести через echo, отдельно или через конкотенцию
echo "Дни недели: " . $monday .", " . $teusday .", ". $wednsday .", " . $thursday;
echo "<br>";
echo "Дни недели: $monday, $teusday, $wednsday, $thursday";
echo "<br>";
echo "Меня зовут $name, мой объем груди {$breast}B<br>";
echo '$name = ' . $name; // выводится как строчные данные
?>
</div>
	
<div class="block">
	<h3>Условия в PHP</h3>
<?php
	
$a = 14;
$b = 5;
$c = 14;
$d = '14';
$e = (int)'15'; // строка будет приведена к числовому значению
//
	if ($a >= $b){
		echo "True<br>";
	} else {
		echo "Not true<br>";
	}
//
	if ($a > $c) {
		echo "$a больше $c";

	} else if ($a < $c) {
		echo "$a меньше $c";
	} else {
		echo "$a равно $c";
	}
//
echo "<br>";
echo '$a = ' . $a . " Числовое значение<br>";
echo '$d = ' . $d . " Строковое значение<br>";
//
	if ($a == $d){
		echo '$a равно $d';
	} else {
		echo '$a не равно $d';
	}
	
	
?>
</div>
	
<div class="block">
	<h3>Массивы</h3>
	
<?php
$nekoName = array("Чокола Минадзуки", 
		  		"Ванилла Минадзуки",
                "Коконат Минадзуки",
                "Адзуки Минадзуки",
                "Синнамон Минадзуки",
                "Мэйпл Минадзуки"
		 	);

echo $nekoName[0];
echo "<br>";
print_r($nekoName);

// Вывод массива с помощью цикла

echo "<br>Вывод до начала цикла<br>";

for($i =0; $i < 6; $i++){
 echo $i;
 echo "<br>";
}

echo "Вывод после начала цикла<br>";

echo "<br>Вывод до начала цикла<br>";

for($j =0; $j <= 10; $j = $j + 2){
    echo $j;
    echo "<br>";
}

echo "Вывод после начала цикла<br>";

echo "<br>Вывод до начала цикла<br>";

for($k =10; $k >= 0; $k = $k - 3){
    echo $k;
    echo "<br>";
}

echo "Вывод после начала цикла<br>";

echo "<br>Вывод до начала цикла<br>";


$neko = array("Чокола Минадзуки", 
		"Ванилла Минадзуки",
                "Коконат Минадзуки",
                "Адзуки Минадзуки",
                "Синнамон Минадзуки",
                "Мэйпл Минадзуки"
		 	);

for($n = 0; $n <= 6; $n++){
    echo $neko[$n];
    echo "<br>";
}

echo "Вывод после начала цикла<br>";

echo "<ul>";
$lenght = count($neko);

for ($ar = 0; $ar < count($neko); $ar++ ){
	echo "<li>";
	echo $neko[$ar];
	echo "</li>";
}
echo "</ul>";

// echo count($neko); // Вывод длины массива

// lenght = count($neko);
// for($n = 0; $n < $lenght; $n++){	
?>
</div>	

<div class="block">
<h3>Ассоциативные массивы</h3>
<?php

$player = array("f_name" => "Орская", "m_name" => "Оксана", "b_size" => 2);
echo "<br>";
// print_r($player);
//	echo "<br>";
//echo $player["f_name"];
	
//  Используем foreach
// Ключи именуем как хотим
foreach ($player as $key => $value){
	echo "$key => $value <br>"; 
	echo "$value <br>";
}
	
foreach ($player as $value){
	echo "$value <br>"; 
	echo "$value <br>";
}
?>
</div>
	
<div class="block">
<h3>Функции</h3>
<?php
	function hello($name){
	echo "Hello $name!";
}
hello("Орская Оксана");
?>
</div>
	
</body>
</html>



