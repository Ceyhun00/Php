<form action="index.php" method="post">
    <p> Enter Sentences, last word must be positive num</p>
    <b>Example: </b> first sentence 23<br/>
        second sentence 45<br/>third sentence 12</p>
    <textarea type="text" placeholder="sentences" name="text" rows="10" cols="45"></textarea><br/><br/>
    <input type="submit" value="Send" name="do_send">
</form>
<?php
require 'Hw.php';
if (isset($_POST['do_send']))
{
    $char="\r";
    $info=$_POST;
    $inp = $info['text'];
    $sent_str_arr = explode($char, $inp);


    $sent_arr_by_words=array();
    $weight_sum=0;
    for ($i=0;$i<count($sent_str_arr);$i++)
    {
        array_push($sent_arr_by_words,explode(' ',$sent_str_arr[$i]));
    }

    $weights_arr=array();
    $sent_no_num=array();

    for ($j=0;$j<count($sent_arr_by_words);$j++)
    {
        for ($u=0;$u<count($sent_arr_by_words[$j]);$u++)
        {
            if($sent_arr_by_words[$j][$u]==''){
                array_splice($sent_arr_by_words[$j],$u,1);
            }
        }
        $weight_sum=$weight_sum+end($sent_arr_by_words[$j]);
        array_push($weights_arr,end($sent_arr_by_words[$j]));
        array_pop($sent_arr_by_words[$j]);
        array_push($sent_no_num,implode(' ',$sent_arr_by_words[$j]));
    }

    $possibility=array();

    $keys=array('text','weight','probability');
    $temp=array();

    $data=array();
    for ($l=0;$l<count($sent_arr_by_words);$l++)
    {
        array_push($possibility,($weights_arr[$l]/$weight_sum));

        array_push($temp,$sent_no_num[$l]);
        array_push($temp,$weights_arr[$l]);
        array_push($temp,($weights_arr[$l]/$weight_sum));

        array_push($data,array_combine($keys,$temp));
        $temp=array();
    }
    $final=array(
        'sum'=>$weight_sum,
        'data'=>$data
    );

    echo json_encode($final);
    echo '<hr>';
    echo control($sent_no_num,$weights_arr);
}