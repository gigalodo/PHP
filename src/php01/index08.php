<?php
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

$name = "";
$age = -1;
$gender = "";


foreach($people as $person){
    foreach($person as $key => $value){//二回目のforeachはやる必要なし？　$name = $person["first_name"]でよいっぽい

        if($key == "first_name")    $name = $value;
        if($key == "age")           $age = $value;
        if($key == "gender")        $gender = $value == "男性"? "men" : "women";

    }

    echo $name . "(" . $age . "歳" . $gender . ")<br />";
}

