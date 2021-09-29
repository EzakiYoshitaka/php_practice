<?php

//PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう

//task1.
$name = "江﨑" ;
//$name = "aaaa" ;  確認用

if($name == "江﨑"){
    echo "私は". $name. "です" ;
} else{
    echo "あなたの名前ではありません" ;
}

echo "\n" ; /*表示を見やすくするため*/

//task2.
$total = 0 ;

for($i = 1 ; $i <= 1000 ; $i++){
    $total += $i ;
}

echo  $total ;

echo "\n" ; /*表示を見やすくするため*/

//task3.
$fruits = array("apple", "orange", "lemon", "peach", "melon") ;

foreach($fruits as $fruits){
    echo $fruits ;
    echo "\n" ;
}

//task4.
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i ;
    echo "\n" ;
  }
}