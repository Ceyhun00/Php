<?php
function simple()
{
    $nl_char = "\n";
    $pr = explode($nl_char, $_POST['text']);
    $randomsentences = [];
    $secondwords=[];
    $resultarr = [];
    foreach ($pr as $item) {
        $words = explode(" ", $item);
        shuffle($words);
        $result = "";
        for ($q = 0; $q <= count($words) - 1; $q++) {
            $result .= $words[$q]." ";
        }
        array_push($randomsentences, $item, $result);
    }

    for ($i = 0; $i <= count($randomsentences) - 1; $i++) {
        $c=explode(" ",$randomsentences[$i]);
        array_push($secondwords, $c[1]);
    }
    sort($secondwords);
    for ($j = 0; $j <= count($randomsentences) - 1; $j++) {

        for ($b = 0; $b <= count($secondwords) - 1; $b++) {
            $second=explode(" ", $randomsentences[$b])[1];
            $sortarrword=$secondwords[$j];
            if ($sortarrword == $second) {
                $resultarr[$j]=$randomsentences[$b];
                break;
            }
        }
    }
foreach ($resultarr as $j){
    echo $j."<br/>";
}
}
simple();

