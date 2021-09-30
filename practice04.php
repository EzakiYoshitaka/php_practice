<?php

//PHP/Laravel 04 関数を理解しよう

//task1.
function double($a){
    $result = 0 ;
    $result = $a * 2 ;
    return $result ;
}

echo double(4) ."\n";

//task2.
function add($b, $c){
    $result = 0 ;
    $result = $b + $c ;
    return $result ;
}

echo add(5,2) ."\n";

//task3.
$arr = array(1, 3, 5, 7, 9);

function multiplication($arr){
    $result = 1 ;
    foreach($arr as $ar){
        $result *= $ar ;
    } return $result ;
}

echo multiplication($arr) ."\n";

//task4.
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a ;
    } 
 }

 return $max_number;
 }
 
 echo max_array($arr) ."\n";
 
 //task5.
 
 //strip_tags($str, $tag)
 //指定した文字列からHTMLタグを取り除く関数。
 //引数　$str => HTMLタグを取り除く文字列を指定, $tag =>取り除かないタグを指定。
 //戻り値 HTMLタグを取り除いたタグが返される。引数「$tags」で指定したタグは取り除かれない。
 $str = "<h1>strip_tags関数</h1>"."<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";
var_dump( strip_tags($str, "<p>") );

 //array_push($array, $value)
 //配列に値を追加する関数。配列の末尾に値を追加する。
 //引数　$array =>追加したい配列を指定, $value =>配列に追加したい値を指定。
 //戻り値 値を追加後の配列の要素数を返す。
 $array = array(1, 2) ;
 $a = array_push($array, 3, 4) ;
 var_dump($array) ."\n"; /*配列に値が追加されたかの確認*/
 echo $a."\n"; /*値を追加後の要素数を表示*/
 
 //array_merge($array1,$array2)
 //配列同士を結合させる関数。
 //引数　結合させたい配列を指定する。
 //戻り値　結合した配列を配列型で返す。
 $array1 = array("arsenal", "man_u", "man_c") ;
 $array2 = array("chelsea", "liverpool", "tottenham") ;
 $array = array_merge($array1, $array2) ;
 print_r ($array) ;
 
 //time(void) ;
 //現在のUNIXタイムスタンプを取得することができる関数.
 //引数 なし。
 //戻り値　Unixタイムスタンプをint型で返す。
 echo '現在のUnixタイムスタンプ：'.time(). "\n" ;
 
 //mktime (時, 分, 秒, 月, 日, 年, サマータイム)
 //指定した日時のUNIXタイムスタンプを取得することができる関数。
 //引数　年・月・日・時・分・秒・サマータイムか否かを指定することができる。（サマータイムなら1、そうでない場合は0）
 //戻り値 int型でUnixタイムスタンプの値を返す。
 $timestamp = mktime(0, 0, 0, 8, 1, 2017);
 echo $timestamp. "\n" ;
 
 //date($format, $timestamp) 
 //引数　$format =>出力される日付文字列の書式を指定, $timestamp =>int型のUnixタイムスタンプ
 //　　　タイムスタンプを指定しなかった場合は、現在の時刻がデフォルトで設定される。
 //戻り値　日付を表す文字列を返す。タイムスタンプに数字以外が渡された場合はFALSEが返され、エラーとなる。
 echo date('Y/m/d'). "\n" ;
 