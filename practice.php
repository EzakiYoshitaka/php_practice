<?php
echo 'hello php!';

//PHP/Laravel 02 PHPの型と基本的な式を理解しよう
//課題1
$a = 3;
$b = 7;
echo $a + $b;

//課題2
$array_month = [ "1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月" ];
echo $array_month[7] ;

//課題3
$hello = "Hello," ;
$name = "Ezaki" ;
$world = "'s World!" ;
echo $hello . $name . $world ;

//課題4
$tech_boost = 'tech' ;
$tech_boost .= ' boost' ;
echo $tech_boost ;

//課題5
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];

$a = 3;
$b = 3;
$c = "3";

var_dump($a == $b);

for($i = 0; $i < 10; $i ++){
    echo $i ;
}

$total = 0;
echo $total ;

for($i = 0; $i <= 100 ; $i ++){
    $total += $i;
}

echo $total;

$fruits = array("apple", "orege", "lemon") ;
echo count($fruits) ;

echo count($calendar_2018);

for($i = 0; $i < count($fruits); $i ++){
    echo "要素は". $fruits[$i] ;
    echo "\n";
}

foreach($fruits as $fruits){
    echo "要素は".$fruits;
    echo "\n" ;
}