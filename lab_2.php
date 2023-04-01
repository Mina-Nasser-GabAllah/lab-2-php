<?php
//insert  new line \n in php
echo nl2br("first line \n second line \n third line");
echo "<br><hr><br>";
//first string bulit-in function hash function md5()
$str1="mina";
echo md5($str1);
echo "<br><hr><br>";
//second string bulit-in function parse_Str()
parse_str("name=nasser&age=23",$output);
echo $output['name']."<br>"; 
echo $output['age']."<br><hr><br>";
//third string bulit-in function Str_repeat()
echo str_repeat("/"."hello"."/",13);
echo "<br><hr><br>";

// Display $_SERVER in readable format.
foreach($_SERVER as $key=>$value){
  echo nl2br("[$key]"."&nbsp;&nbsp;&nbsp;".$value."\n\n");
}
echo "<br><hr><br>";

// sum of array
$arr = [12,45,10,25];
$sum=0;
foreach($arr as $value){
  $sum+=$value;  
}
//display array
echo "originalArray = ";
for($x = 0; $x < count($arr); $x++) {
  if($x==(count($arr)-1)){
    echo $arr[$x] ."]"."<br>";
  }elseif($x==0){
    echo "[".$arr[$x].",";
  }else{
  echo $arr[$x] .",";
  }
}
//display sum and avg
echo "sum = ".$sum ."<br>";
echo "avg = ".$avg =$sum /count($arr) . "<br>";
//reverse sorting array and dispaly it
echo "sortingArray = ";
$sorting_arr = $arr;
rsort($sorting_arr);
for($x = 0; $x < count($sorting_arr); $x++) {
  if($x==(count($sorting_arr)-1)){
    echo $sorting_arr[$x] ."]"."<br>";
  }elseif($x==0){
    echo "[".$sorting_arr[$x].",";
  }else{
  echo $sorting_arr[$x] .",";
  }
}
echo "<br><hr>";
// Write a PHP script to sort the following associative array 
$array=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
//a) ascending order sort by value
echo "a) ascending order sort by value <br><br>";
$ascendValueSort= $array ;
asort($ascendValueSort);
foreach($ascendValueSort as $key=>$value){
     echo "key = ".$key." || "."value = ".$value ."<br>" ;
}
echo "<br><hr>";
//b) ascending order sort by Key
echo "b) ascending order sort by Key <br><br>";
$ascendkeySort= $array ;
ksort($ascendkeySort);
foreach($ascendkeySort as $key=>$value){
     echo "key = ".$key." || "."value = ".$value ."<br>" ;
}
echo "<br><hr>";
//c) descending order sorting by Value
echo "c) descending order sorting by Value<br><br>";
$descendValueSort= $array ;
arsort($descendValueSort);
foreach($descendValueSort as $key=>$value){
     echo "key = ".$key." || "."value = ".$value ."<br>" ;
}
echo "<br><hr>";
//d) descending order sorting by Key
echo "d) descending order sorting by Key <br><br>";
$descendkeySort= $array ;
krsort($descendkeySort);
foreach($descendkeySort as $key=>$value){
     echo "key = ".$key." || "."value = ".$value ."<br>" ;
}
?>
