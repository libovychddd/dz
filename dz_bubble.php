<?php

$A = [2,3,8,1,10,18,17];

        for ($i=0; $i<count($A); $i++){
                for ($j=count($A)-1; $j>$i; $j--) {
                        if ($A[$j]<$A[$j-1]) {
                        $b = $A[$j];
                        $c = $A[$j-1];
                        $A[$j]=$c;
                        $A[$j-1]=$b;
                        }
                }
        }

echo json_encode($A),PHP_EOL;

