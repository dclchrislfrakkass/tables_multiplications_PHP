<?php
echo "TABLE DE ".$chiffre."<br>"."<br>" ;

$i = $chiffre;

for ($j = 0; $j <=10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
    echo '<br>';
    for ($j = 10; $j <=20; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
    echo '<br>';
    for ($j = 20; $j <=30; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }



?>