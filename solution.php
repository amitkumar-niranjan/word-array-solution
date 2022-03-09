<?php
$_fp = fopen("php://stdin", "r");
/* 
Enter your code here. Read input from STDIN. Print output to STDOUT 
T is number of test or the input of word is taken from user and printing the string
*/
$T = intval(rtrim(fgets(STDIN)));
$out = "";
$arr_str = array();
$odd="";
$even="";
for($i=0;$i<$T;$i++)
{
    $input_str = rtrim(fgets(STDIN));
    $arr_str = str_split($input_str);
    
    for($j=0;$j<count($arr_str);$j++){
        if($j%2 == 0)// for even
        {
            $even = $even.$arr_str[$j];
        }elseif($j%2 != 0){
            $odd = $odd.$arr_str[$j];
        }        
    }
    echo $even." ".$odd."\n";
    $even="";
    $odd="";
}


fclose($_fp);
?>
