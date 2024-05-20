<?php
require_once("./php/lib.php");
function cart_countItem()
{
   $count = 0;
$p = getListData("cart");
foreach ($p as $p) {
    $count = $count + $p["soluong"];
} 
return $count;
}

?>
