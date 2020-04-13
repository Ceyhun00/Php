
<?php

$c=$_POST['username'];
function edit($str){
    $count =0;
    for ($i = 0; $i<strlen($str); $i ++) {
        if($str[$i]=='h'){
            $str[$i]=4;
            $count+=1;
        }elseif ($str[$i]=='o'){
            $str[$i]=0;
            $count+=1;
        }elseif ($str[$i]=='l'){
            $str[$i]=1;
            $count+=1;
        }
    }
    echo $str.'<br/>';
    echo $count;

}
edit($c);

