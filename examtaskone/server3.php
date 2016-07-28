<?php
$colors = [];

for($i = 0 ; $i < 3; $i++){
    $colors[] = dechex(rand(0x000000, 0xFFFFFF));
}

echo json_encode($colors);