<?php 
// 同じような値、文字列をひとまとめにする手法
//配列は 0番目から始める 連想配列に関しては $i = ["key0" => "0", "key1" => "1", "key2" => "2",];など特定の名称をつけることができる

$contries = ["America", "Japan", "China", "Korea",];

var_dump($contries);
echo "<br>";

//配列の続きとして追加したい場合は $変数名[n] とする。数字をいれると指定できるが数字を入れない場合には連番となる。
$fruits = ["りんご", "みかん", "ぶどう"];
$fruits[] = "もも";

var_dump($fruits);

?>