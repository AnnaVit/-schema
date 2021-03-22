<?php

/*$array = [];

while (count($array) < 1000000){
    $array[] = rand(0, 1000000);
}
*/

function bubbleSort($array){
    for($i=0; $i<count($array); $i++){
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            if($array[$i]>$array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}



//$start = microtime(true);
//bubbleSort($array); // мой комп не смог
//echo 'bubbleSort ' . (microtime(true) - $start);

function shakerSort ($array) {
    $n = count($array);
    $left = 0;
    $right = $n - 1;
    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1], $array[$i]);
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1], $array[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);

    return $array;
}

//$start = microtime(true);
//shakerSort($array);; // мой комп не смог
//echo 'shakerSort ' . (microtime(true) - $start);


function quickSort(&$arr, $low, $high) {
    $i = $low;
    $j = $high;
    $middle = $arr[ ( $low + $high ) / 2 ];   // middle – опорный элемент; в нашей реализации он находится посередине между low и high
    do {
        while($arr[$i] < $middle) ++$i;  // Ищем элементы для правой части
        while($arr[$j] > $middle) --$j;   // Ищем элементы для левой части
                if($i <= $j){
// Перебрасываем элементы
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
// Следующая итерация
                    $i++; $j--;
                }
        }
    while($i < $j);

    if($low < $j){
// Рекурсивно вызываем сортировку для левой части
        quickSort($arr, $low, $j);
    }

    if($i < $high){
// Рекурсивно вызываем сортировку для правой части
        quickSort($arr, $i, $high);
    }
  return $arr;
}

//$start = microtime(true);
//quickSort($array, 0, 999999);
//echo 'quickSort ' . (microtime(true) - $start); // 8.4822559356689

function quickSort2($array){

    $arrCount = count($array);


    if($arrCount <= 1){
        return $array;
    }

    $base = $array[0];
    $left = [];
    $middle[] = $base;
    $right = [];

    for($i = 1; $i < $arrCount; $i++){
         if(($base == $array[$i])){
             $middle[] = $array[$i];
         }elseif ($base > $array[$i]){
             $left[] = $array[$i];
         }else{
             $right[] = $array[$i];
         }
    }

    $left = quickSort2($left);
    $right = quickSort2($right);

    return array_merge($left,$middle,$right);


}
//$start = microtime(true);
//quickSort2($array);
//echo 'quickSort2 ' . (microtime(true) - $start); // 11.85696721077





function interpolationSearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while (($start <= $end) && ($num >= $myArray[$start]) && ($num <= $myArray[$end])) {
        $n++;
        $base = floor( $start +
            ($end - $start) / ($myArray[$end] - $myArray[$start])
            * ($num - $myArray[$start])
        );

        echo "Проверяется элемент с индексом: $base" . PHP_EOL;

        if ($myArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n" . PHP_EOL;
    return null;

}

function deleteNum($array, $num)
{
    $array = quickSort2($array);

    $indexNum = interpolationSearch($array, $num);

    for($i = $indexNum; $array[$i] == $num; $i++){

       unset($array[$i]);

    }
    return $array;
}


$array = [1,4,6,3,8,2,5,4,1,7,9,11];

var_dump(deleteNum($array, 4));