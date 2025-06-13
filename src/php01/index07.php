<?php

function sumnum($a , $b){
    $sum = $a + $b;
    echo $sum .  "<br />";
    return $sum;
}

sumnum(2,3);
echo "<br />";

function judgeScore($score1,$score2,$score3){
    
    $sumScore = $score1 + $score2 + $score3;
    
    if($sumScore >= 210){
        print "合計点は" . $sumScore . "なので合格です";
    }else{
        print "合計点は" . $sumScore . "なので不合格です";
    }
    
    echo "<br />";
}

judgeScore(0,0,10);
judgeScore(110,110,10);
judgeScore(209,0,0);

echo "<br />";


function daikei($ue,$shita,$takasa){

    return ($ue + $shita) * $takasa / 2;

}


echo daikei(2,3,4) . "<br />";


