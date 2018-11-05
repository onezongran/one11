<?php
//1到100的和
//方式1
echo "1到100的和";
echo "<br>";
function action1(){
  $sum=0;
  for ($i=1; $i <=100 ; $i++) {
    $sum=($sum+$i);
  }
  return $sum;
}

$sum=action1();
echo $sum;
echo "<br>";

//方式2
function action2(){
  return array_sum(range(1,100));
}
$num=action2();
echo $num;
echo "<br>";

//方式3
function action3(){
  $n=100;
  return (1+$n)*($n/2);
}
$n=action3();
echo $n;
echo "<hr>";


echo "N的阶乘";
echo "<br>";
//方式1
function act1($n){
  if($n==1){
    $r=$n;
  }else{
    $r=($n*act1($n-1));
  }
  return $r;
}
$n=10;
echo $n."的阶乘为".act1($n);
echo "<br>";
//方法2
function act2($n){
  $res=1;
  for($i=2;$i<=$n;$i++){
    $res*=$i;
  }
  return $res;
}
$n=10;
$res=act2($n);
echo $n."的阶乘为".$res;
echo "<hr>";
echo "判断一个字符串是否为回文字符串";
echo "<br>";
$string="abba";
$stra=array();
$strb=array();
$res=checkhuiwen($string);
function checkhuiwen($string){
  for ($i=0; $i <strlen($string) ; $i++) {
    $stra[$i]=$string[$i];
  }
  $strb=array_reverse($stra);
  for ($i=0; $i <count($stra) ; $i++) {
    if($stra[$i]!=$strb[$i]){
      return 1;
      break;
    }
  }
  return 2;
}
if($res==2){
  echo "此字符串是回文字符串";
}else{
  echo "此字符串不是回文字符串";
}
echo "<hr>";

//第四题
echo "第四题";
/**
 *
 */
/**
 *
 */
class Person
{
  private $name;
  private $age;
  function __construct($name,$age)
  {
    $this->name=$name;
    $this->age=$age;
  }
}
/**
 *
 */
interface Walk
{
  public functon walkaction("骑车");
}
/**
 *
 */
class Student extends Person
{

  function __construct(argument)
  {
    parents::Walk;
  }
}















?>
