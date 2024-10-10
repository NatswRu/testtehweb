<?php

// task 1
$b = [1, 3, 5, 3, 2, 1, 8, 90, 56, 45];
$a = 0;
for ($i = 0; $i < count($b); $i++){
    $a = $a + $b[$i];
}
echo $a . "<br>";
echo "<br>";

// task 2
for ($i = 0; $i < count($b); $i++){
    if($a < $b[$i]){
        $a = $b[$i];
    }
}
echo $a . "<br>";
echo "<br>";

// task 3
/*
$ba = [20 => 0];
for ($i = 0; $i < count($b); $i++){
    $ba[$i] = $i;
}
*/

$ba = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
echo "<br>";
for ($i = 0; $i < count($b); $i++){
    if($ba[$i] % 3 == 0){
        echo $ba[$i] . "<br>";
    }
}
echo "<br>";

// task 4
$mas1 = [5, 6, 3, 4, 2, 1];
$mas2[] = count($mas1);
$num = min($mas1);
for($i = 0; $i < count($mas1) - 1; $i++){
    for($j = 0; $j < count($mas1) - $i - 1; $j++){
        if ($mas1[$j] > $mas[$j + 1]){
            $num = $mas1[$j];
            $mas2[$i] = $mas1[$j + 1];
            $mas1[$j] = $num;
        }
    }
}
for ($i = 0; $i < count($mas2); $i++){
    echo $mas2[$i] . "<br>";
}
echo "<br>";

// task 5

$ba = [1,2,3,4,5,6,7,8,9,11,12,10,13,14,15,16,17,18,19,20,34];
echo "<br>";
for ($i = 0; $i < count($ba); $i++){
    if($ba[$i] == 10){
        echo "число 10 найдено" . "<br>";
    }
}
echo "число 10 не найдено" . "<br>";

// task 6

$ba = [1,2,3,4,5,6,7,8,9,11,10,12,13,14,15,16,17,18,19,20,34];
$bb[] = count($ba);
$bd[] = count($ba);
for ($i = 0, $numb = 0, $numd = 0; $i < count($ba); $i++){
    if($ba[$i] % 2 == 0){
        $bb[$numb] = $ba[$i];
        $numb++;
    }
    else{
        $bd[$numd] = $ba[$i];
        $numd++;
    }
}
for ($i = 0; $i < count($bb); $i++){
    echo $bb[$i] . " ";
}
echo "<br>";
for ($i = 0; $i < count($bd); $i++){
    echo $bd[$i] . " ";
}

echo "<br>";



/*
$a = 5;
$b = '5';

echo $a + $b . "<br>";

echo -4 - -5;

const A = 54;

echo A;

echo "Hello world" . "<br>";
echo 5+5 . "<br>";
echo 5 . " five" . "<br>";
echo 5**5;
*/

?>