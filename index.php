<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
<h1>Основы языка PHP</h1>

<?php

echo "<h2>Hello from php!</h2><br>";
echo "<u>Типы переменных</u>";

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
echo "<br>";
echo "Дни недели: " . $monday .", " . $teusday .", ". $wednsday .", " . $thursday;
echo "<br>";
echo "Дни недели: $monday, $teusday, $wednsday, $thursday";
echo "<br>";
echo "Меня зовут $name, мой объем груди {$breast}B<br>";
echo '$name = ' . $name; // выводится как строчные данные
echo "<br>";
echo "<br>";
echo "<u>Условия в PHP</u><br>";
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
//
echo "<br>";
echo "<br>";
echo "<u>Массивы</u><br>";

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





?>

</body>
</html>



