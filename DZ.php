<?php
//array_reverse($i); переворачивает массив;
//explode(' ', $i); разделить по разделителю(будет массив)
//str_split($i); преобразовать строку в массив
//array_sum($i); Вычисляет сумму значений массива
//implode($a); преобразовывает из массива в строку
//mb_strlen($c) считает кол-во симвалов в строке
//strpos($a, 3) — Ищет есть ли такое число в строке
//__-------------------------------------------------------------------------------________________________________________________________________________________________________________________
//Выведите в консоль все числа в промежутке от 10 до 1000, у которых предпоследняя цифра четная.
//class getNumders
//{
//    private static function number()
//    {
//        for ($i = 10; $i <= 1000; $i++) {
//            $a = array_reverse(str_split($i));
//            if ($a[1] <= 1000 && $a[1] % 2 == 0 && $a[1] != 0){
//                echo $i . ', ';
//            }
//        }
//    }
//
//    static function getNumber()
//    {
//        self::number();
//    }
//}
//$a = new getNumders();
//$a::getNumber();
//__________________________________________________________________________________________________________________
//Сделайте строку, содержащую столько нулей, сколько указано в переменной. В нашем случае получится такая строка:
//$num = 3;
//
//$str = '';
//
//for($i = 1; $i <= $num; $i++){
//    $str = $str . '0';
//}
//echo $str;
//__________________________________________________________________________________________________________________\
//Удалите из этой строки каждое второе слово. В нашем случае должно получится следующее:
//$str = 'aaa bbb ccc eee fff ggg hhh iii jjj kkk lll mmm nnn ooo ppp qqq ';
//$a = explode(' ', $str);
//$c = '';
//
//    foreach ($a as $item => $b){
//        if($item % 2 == 0 || $item = 0){
//            $c = $c . ' ' . $b;
//        }
//    }

//echo '<pre>';
//print_r($c);
//echo '</pre>';

//__________________________________________________________________________________________________________________
//Найдите сумму элементов этого массива.
//$a = [
//    [1, 2, 3],
//    [4, 5, 6],
//    [7, 8, 9],
//];
//$c = 0;
//foreach ($a as $item => $b){
//    $c = $c + array_sum($b);
//}
//echo '<pre>';
//print_r($c);
//echo '</pre>';
//__________________________________________________________________________________________________________________
//Дан массив со словами. Удалите из него слова, состоящие более чем из трех символов.
//$a = ['прилетел я как то раз в горы и буду в них жить ура'];
//$a = implode($a);
//$b = explode(' ', $a);
//$d = '';
//foreach ($b as $item => $c){
//    if(mb_strlen($c) <= 3){
//        $d = $d . ' ' . $c;
//    }
//}
//echo '<pre>';
//print_r($d);
//echo '</pre>';
//__________________________________________________________________________________________________________________
//Найдите сумму элементов этого массива.
//$a = [
//        [
//            [11, 12, 13],
//            [14, 15, 16],
//            [17, 17, 19],
//        ],
//        [
//            [21, 22, 23],
//            [24, 25, 26],
//            [27, 27, 29],
//        ],
//        [
//            [31, 32, 33],
//            [34, 35, 36],
//            [37, 37, 39],
//        ],
//];
//$d = 0;
//foreach ($a as $item => $b){
//    foreach ($b as $c)
//    $d = $d + array_sum($c);
//
//}
//echo '<pre>';
//print_r($d);
//echo '</pre>';
//__________________________________________________________________________________________________________________
//Выведите в консоль все числа в промежутке от 10 до 1000, у которых первая цифра четная.
//class getNumders
//{
//    private static function number()
//    {
//        for ($i = 10; $i <= 1000; $i++) {
//            $a = str_split($i);
//            if ($a[0] <= 1000 && $a[0] % 2 == 0 && $a[0] != 0){
//                echo $i . ', ';
//            }
//        }
//    }
//
//    static function getNumber()
//    {
//        self::number();
//    }
//}
//$a = new getNumders();
//$a::getNumber();
//__________________________________________________________________________________________________________________
//Дан текст со словами. Запишите в массив все слова, начинающиеся на букву 'a'.
//$a = 'я на авто ел апельси много нас а он один';
//$b = explode(' ', $a);
//
//
//foreach ($b as $c) {
//
//    if(str_starts_with($c, 'а')){
//        $d[] = $c;
//    }
//
//}
//echo '<pre>';
//print_r($d);
//echo '</pre>';


//    echo '<pre>';
//    print_r($b);
//    echo '</pre>';
//__________________________________________________________________________________________________________________
//Дан массив с числами. Оставьте в нем только те числа, которые делятся на 5.

//$a = [3, 1, 6, 3, 8, 10, 15, 26, 15, 5];
//
//foreach ($a as $item => $b){
//    if($b % 5 != 0){
//        unset($a[$item]);
//}
//}
//echo '<pre>';
//print_r($a);
//echo '</pre>';
//__________________________________________________________________________________________________________________
//Дан массив с числами. Оставьте в нем только те числа, которые содержат цифру ноль.
//$a = [0, 1, 2, 3, 20, 1000, 1002];
//
//foreach ($a as $item =>$b){
//    if(strpos($b, '0') === false) {
//        unset($a[$item]);
//        }
//}
//echo '<pre>';
//print_r($a);
//echo '</pre>';


//__________________________________________________________________________________________________________________
//Дан массив со числами. Проверьте, что в нем есть число, содержащее в себе цифру 3.

//$a = [0, 1, 2, 33, 32, 123];
//
//foreach ($a as $item => $b){
//    if(strpos($b, 3) === false){
//        echo' В массиве нет числа 3';
//    } else {
//        echo ' В массиве есть число 3 ';
//    }
//
//}


//try {
//    $x = 2;
//    if ($x >= 0) {
//        echo 'Good';
//    } else {
//        throw new Exception('Меньше ноля');
//    }
//} catch (Exception $e){
//    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";


    function getNum($x)
    {
        if ($x >= 0) {
            echo 'Good';
        } else {
            throw new Exception('Меньше ноля');
        }

    }

try {
    echo getNum(5) . "\n";
    echo getNum(-2) . "\n";
} catch (Exception $e){
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}
?>
