<?php 
function chess($x = 1, $y = 8)
{
    if ($y > $x){
        if (fmod($y,$x) == 0){
            $board = [];
            while (count($board) < $y){
                for ($i=0; $i < $x; $i++) {
                    $board[] = "*";
                }
                for ($i=0; $i < $x; $i++) {
                    $board[] = "-";
                }
            }

            for ($i=0; $i < $y; $i++) { 
                if (fmod($i, 2) == 0){
                    print(implode(" ", $board));
                }
                else{
                    print(implode(" ", array_reverse($board)));
                }
                print("<br>");
            }
        }
        else{
            print("The number of rows must be a multiple of the number of columns.");
        }
    }        
    else{
        print("y must be greater than x");
    }
}

chess(4, 8);