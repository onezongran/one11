<?php
$a="/a/b/c/d/test.php";
$b="/a/b/d/c/test.php";
$c = [];
$lenht1 = strlen($a);
$lenth2 = strlen($b);
for ($i=0;$i<$lenht1;$i++) {
    for ($j=0;$j<$lenth2;$j++){
        $n = ($i-1>=0 && $j-1>=0)?$c[$i-1][$j-1]:0;
        $n = ($a[$i] == $b[$j]) ? $n+1:0;
        $c[$i][$j] = $n;
    }
}
foreach ($c as $key=>$val) {
    $max = max($val);
    foreach ($val as $key1 =>$val1) {
        if ($val1 == $max && $max>0) {
            $cdStr[$max] = substr($b,$key1-$max+1,$max);
        }
    }
}
ksort($cdStr);
print_r(end($cdStr));
?>
