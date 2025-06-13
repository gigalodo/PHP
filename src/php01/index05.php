<?php

$a = 5;
// echo "$aは5です";

if($a == 5){
    echo "aは5です";
}

echo "<br />";

$a = 7;

if($a == 5){
    echo "\$aは5です";
}else{
    echo "\$aは5ではありません";
}

echo "<br />";
echo "<br />";


if($a == 5){
    echo "\$aは5です";
}elseif($a == 7){
    echo "\$aは7です";
}

echo "<br />";
echo "<br />";

$people	= "Saburo";

switch($people){
    case "Saburo":
        echo "三郎です！！！";
        break;
    default:
        echo "aaaaa";
        break;

}
echo "<br />";
echo "<br />";


$result = $a==7? "TRUE" : "FALSE";
echo $result;
