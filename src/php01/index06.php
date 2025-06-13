<?php

for($i = 0; $i < 5; $i++){
    echo ($i + 1) * 2;
    echo "<br />";
}

echo "<br />";

$count = 0;

while($count<20){
    echo $count + 1 . "<br />";
    $count++;
}

echo "<br />";

$count = 0;

while($count<=100){
    $count++;
    if($count%3 == 0){
        continue;
    }elseif($count == 20){
        break;
    }
    echo $count . "<br />";
    
}

echo "<br />";

$num = 0;

do{
    echo "num = " . $num . "<br />";
    $num++;

}while($num < 3);

echo "<br />";


for($i = 1; $i <= 50; $i++){

    if(($i % 3 == 0) and ($i % 5 == 0)){
        echo "FizzBuzz";
    }elseif($i % 3 == 0){
        echo "Fizz";
    }elseif($i % 5 == 0){
        echo "Buzz";
    }else{
        echo $i;
    }

    echo "<br />";
}

echo "<br />";


for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
    echo "●";
    }
    echo "<br />";
}

