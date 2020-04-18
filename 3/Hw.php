<?php
function simple()
{
    $nl_char="\n";
    $pr=explode($nl_char,$_POST['text']);
    foreach ($pr as $item) {
        $words = explode(" ", $item);
        shuffle($words);
        $result="";
        foreach ($words as $val){
            $result.=$val." ";
        }
        echo $result."<br/>";
    }
/*
    shuffle($words);
    foreach ($words as $val) {
        echo $val." ";
    }*/
}
simple();




