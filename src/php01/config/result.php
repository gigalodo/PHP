<?php
$name       = $_GET["name"];
$product    = $_GET["product"];
$num        = $_GET["num"];
// $my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);

echo "私の名前は、" . $name . "<br />";
echo "ご希望の商品は、" . $product . "<br />";
echo "数量は、" . $num . "<br />";

