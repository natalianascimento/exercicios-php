<?php 
/* $i =0;
while ($i++ < 3){
    echo "3\n";
    while (1) {
        echo "2\n";
        while (1){
            echo "1\n";
            continue 3;
        }
        echo "Essa linha nunca será exibida \n";
    }
    echo "Nem essa linha \n";
}

echo "<br>";
echo "<br>"; */

// Ctrl + Shift + / para comentar e Ctrl + Shift + \ para descomentar.

$i = 0;
while ($i++ < 1) {
    switch ($i) {
        case 1:
            echo $i . "a\n<br>";
            //continue ;
            echo $i . "b\n<br>";
        case 2:
            echo $i . "c\n<br>";
            //continue 2;
            echo $i . "d\n<br>";
        case 3:
            echo $i . "e\n<br>";
            //break;
            echo $i . "f\n<br>";
        case 4:
            echo $i . "g\n<br>";
            //break 2;
            echo $i . "h\n<br>";
    }
echo "$i x\n<br>";
}


?>