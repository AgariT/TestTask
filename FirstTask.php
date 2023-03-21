<?php 
$a = 111;
$array = array(1, 2, 23, 34, 45, 200, 222);
$count = count($array);

for ($i = 0; $i < $count; $i++) 
{
    if (strpos($array[$i], '2') !== false) 
    {
        $count++;
        for ($j = $count - 1; $j > $i + 1; $j--) 
        {
            $array[$j] = $array[$j - 1];
        }
        $array[$i + 1] = $a;
        $i++;
    }
}
print_r($array);
?>
