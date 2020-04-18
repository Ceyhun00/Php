<?php

$c=$_POST['text'];


function simple($str,$from=0)
{
    $count = 0;
    for ($i = $from; $i < strlen($str); $i++) {
        if ($str[$i] == 'h') {
            $str[$i] = 4;
            $count += 1;
        } elseif ($str[$i] == 'o') {
            $str[$i] = 0;
            $count += 1;
        } elseif ($str[$i] == 'l') {
            $str[$i] = 1;
            $count += 1;
        }
        yield $str[$i];
    }
    echo "<br/>".$count;
}
function pucs($str){
   foreach (simple($str) as $val){
    echo $val;
   }
}
pucs($c);

