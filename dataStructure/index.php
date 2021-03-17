<?php
/*
 1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.
 */

define('ROOT_DIR' , realpath(__DIR__ . '/../'));

function fileManager($path){
    $dir = new DirectoryIterator($path);
    foreach ($dir as $item){

        if($item == '.' || $item == '..'){
            continue;
        }
        if($item->getType() !== 'dir') {
            echo $item->getFilename() . "<br>";
        }
        else{
            $path = $item->getPath()."\\".$item->getFilename();
            echo $item->getFilename() . "<br>";
            fileManager($path);
        }
    }
}

fileManager(ROOT_DIR);

/*
 2. Определить сложность следующих алгоритмов:
поиск элемента массива с известным индексом,
дублирование массива через foreach,
рекурсивная функция нахождения факториала числа.

поиск элемента массива с известным индексом - O(1);

дублирование массива через foreach - O(n)

рекурсивная функция нахождения факториала числа - O(!n)


  */

/*
 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
1)
```
$n = 100;
$array[]= [];

for ($i = 0; $i < $n; $i++) {  // O(n)  99 итераций
for ($j = 1; $j < $n; $j *= 2) { //0(log(n)) 7 итераций(1*2*2*2*2*2*2)
$array[$i][$j]= true;
} }

сложность - O(nlog(n))

$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) { // O(n) 50 итераций
    for ($j = $i; $j < $n; $j++) { // O(n) 100 в худшем случае
        $array[$i][$j]= true;
    } }

сложность  O(n^2)
 * */