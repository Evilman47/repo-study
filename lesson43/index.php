<?php
$string = "i love learn PHP";

// Привести все слова в исходном предложении к верхнему регистру
$strtoupper = strtoupper($string);
print_r($strtoupper);
echo "<br/>";

// Написать функцию, которая которая на вход принимает исходное предложение и вторым аргументом любую строку. Далее внутри функции найти слово PHP и заменить его на слово со второго аргумента и вернуть результат выполнения функции.
function replace($string, $string2)
{
   echo str_replace("PHP", $string2, $string);
}
replace($string, "javа");
echo "<br/>";

// Посчитать количество слов в исходной строке
echo str_word_count($string);
echo "<br/>";

// Посчитать количество всех символов исходной строки
echo strlen($string);
echo "<br/>";

$array = [
	"name" => "Fred",
	"remove" => True,
	"additional_params" => [
	"is_married" => false,
	"country" => "France",
	"born" => "10.09.1982"
]
];
unset($array["remove"]);
echo'<pre>';
print_r($array);

// Найти возраст пользователя (на сегодняшний день)

function get_age( $birthday ){
	$diff = date( 'Ymd' ) - date( 'Ymd', strtotime($birthday) );
	return substr( $diff, 0, -4 );
}
echo get_age($array["additional_params"]["born"]);
echo "<br/>";

// Отсортировать массив по ключу (Использовать встроенные функции, без циклов!)
ksort($array);
var_dump($array);

// Добавить информацию о стране пользователя используя новый массив (название, столица, часовой пояс и пр.) и поместить данный массив вместо значения country 
$array["additional_params"]["country"] = [
   "name" => "France",
   "capital" => "Paris",
   "gmt" => "+1"
];
var_dump($array);
echo "<br/>";

// Объединить текущий массив с массивом [“child” => null] (встроенная функция объединения из занятия)
$child = ["child" => null];
$array = array_merge($array, $child);
var_dump($array);
echo "<br/>";

//  дату рождения превратить её в массив и добавить ключи соответствующие значению (день, месяц, год) поставить данный массив на вместо  значения born (explode для массивов)
$born = $array["additional_params"]["born"];
$born = explode(".", $born);
$newBorn = [
   "day" => $born[0],
   "month" => $born[1],
   "year" => $born[2]
];
$array["additional_params"]["born"] = $newBorn;
var_dump($array);

sort($born);
var_dump($born);
echo "min: $born[0] , max: $born[2]";