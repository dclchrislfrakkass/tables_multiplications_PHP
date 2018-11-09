<?php


$i = $chiffre;
/*
for ($j = 0; $j <=10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
    for ($j = 10; $j <=20; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
    for ($j = 20; $j <=30; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
*/
function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=1; $a <= $nbr; $a++) {
        $table .= '<tr>';
        for ($b=1; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}

echo table(10, 10);

?>