<?php 

function getname ($name)
{
    global $names;

$names = "koer    123
kass    34535
kukk    564
kana    546546";
    
    $rows = explode ("\n", $names);
    //print_r($rows);
    
    foreach($rows as $key => $val)
    {
        $temp = explode("    ", $val);
        $surname [$temp[0]] = $temp[1];
   }
    print_r($surname);
    
    
    return $count;
}

getname("koer");

 ?>