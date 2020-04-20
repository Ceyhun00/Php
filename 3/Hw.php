<?php
function simple()
{
    $nl_char = "\n";
    $pr = explode($nl_char, $_POST['text']);
    $arr = [];
    $ar=[];
    $aq = [];
    foreach ($pr as $item) {
        $words = explode(" ", $item);
        shuffle($words);
        $result = "";
        for ($q = 0; $q <= count($words) - 1; $q++) {
            $result .= $words[$q]." ";
        }
        array_push($arr, $item, $result);
    }

    for ($i = 0; $i <= count($arr) - 1; $i++) {
        $c=explode(" ",$arr[$i]);
        array_push($ar, $c[1]);
    }
    sort($ar);
    for ($j = 0; $j <= count($arr) - 1; $j++) {

        for ($b = 0; $b <= count($ar) - 1; $b++) {
            $second=explode(" ", $arr[$b])[1];
            $sortarrword=$ar[$j];
            if ($sortarrword == $second) {
                $aq[$j]=$arr[$b];
                break;
            }
        }
    }
foreach ($aq as $j){
    echo $j."<br/>";
}
}
simple();




