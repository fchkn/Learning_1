<head>
    <title>php_LowTest</title>
</head>

<body>
<?php

    /********************************************/
    echo "<br><br>★1-8<br>";
    $data = number_format(12345);
    echo $data;
    /********************************************/


    /********************************************/
    echo "<br><br>★2-3<br>";
    $price = 5;
    $off = 0.35;
    printf('Price : $%.1f', $price * (1 - $off));
    echo "<br>";
    printf('Price : $%.2f', $price * (1 - $off));
    /********************************************/


    /********************************************/
    echo "<br><br>★2-5<br>";
    print ucwords(strtolower('SATO ICHIRO'));
    echo "<br>";
    print ucwords(strtoupper('sato ichiro'));
    /********************************************/


    /********************************************/
    echo "<br><br>★2-7<br>";
    print 1*8 . 3*4;
    /********************************************/


    /********************************************/
    echo "<br><br>★2-9<br>";
    print 'Hello' == 'Hello' ;
    echo "<br>";
    print 'Hello' == 'HELLO'; // falseのため出力は空白
    echo "<br>";
    print strcasecmp('Hello', 'Hello');
    echo "<br>";
    print strcasecmp('Hello', 'HELLO');
    echo "<br>";
    print strcasecmp('Hello', 'HELLO2');
    echo "<br>";
    print strcasecmp('Hello', 'HELLO24');
    echo "<br>";
    print strcasecmp('Hello2', 'HELLO');
    echo "<br>";
    print strcasecmp('ABC', 'ABA');
    /********************************************/


    /********************************************/
    echo "<br><br>★2-10<br>";
    echo "Print string1 : \"PHP\" <br>";
    // ヒアドキュメントは長い文字列を定義する際などに使われる
    echo <<<_DATA_
    Print string2 : "PHP" <br>
    _DATA_; 
    /********************************************/


    /********************************************/
    echo "<br><br>★3-3<br>";
    $data = '10';

    if ($data == 10) {
        print "1";
    } else {
        print "2";
    }
    /********************************************/


    /********************************************/
    echo "<br><br>★3-4<br>";
    // abs()は引数の絶対値を返す -100なら100
    if (abs(-100) > abs(-50)) {
        print "AAA";
    }

    if ("abc" > "xyz") {
        print "BBB";
    } else if ("567" < "890") {
        print "CCC";
    }
    /********************************************/


    /********************************************/
    echo "<br><br>★3-5<br>";
    // php7では44、php8では5memberが出力される
    if ('5member' < 44) {
        print "44";
    } else {
        print "5member";
    }
    /********************************************/


    /********************************************/
    echo "<br><br>★3-6<br>";
    // strcmp「文字列1」が「文字列2」 よりも小さければ負の整数を、
    //「文字列1」が 「文字列2」よりも大きければ正の整数を、 等しければ0を返します。
    if ( strcmp("1st", "1st") == 0 ) {
        echo "同じ文字列です\n";
    } else {
        echo "異なる文字列です\n";
    }

    echo "<br>";

    if ( strcmp("1st", "2nd") == 0 ) {
        echo "同じ文字列です\n";
    } else {
        echo "異なる文字列です\n";
    }
    /********************************************/


    /********************************************/
    echo "<br><br>★3-7<br>";
    // 宇宙船演算子（<=>）は右左の数の比較を行う。大なら1、小なら-1、一致なら0
    $ans = 2 <=> 22.5;
    if ($ans > 0) {
        print "Over";
    } else {
        print "Under";
    }
    /********************************************/


    /********************************************/
    echo "<br><br>★3-9<br>";
    $i = 1;
    $add = 0;

    while (++$i < 10) {
        $add += $i;
    }

    print $add;
    /********************************************/


    /********************************************/
    echo "<br><br>★4-4<br>";
    // array_splice()は配列の一部を削除したり、他の要素で置換できる関数です。
    
    $fruits = array( "りんご", "みかん",  "れもん", "メロン" );
    // 削除された要素を出力
    print_r(array_splice($fruits, 2, 2));
    echo "<br>";
    // 削除後の配列を出力
    print_r($fruits);
    echo "<br>";

    $fruits_2 = array( "りんご", "みかん",  "れもん", "メロン" );
    $addFruiuts = array("ぶどう", "もも");
    // 配列の要素を置換して、削除された要素を出力
    print_r(array_splice($fruits_2, 2, 2, $addFruiuts));
    echo "<br>";
    // 置換後の配列を出力
    print_r($fruits_2);
    /********************************************/


    /********************************************/
    echo "<br><br>★4-5<br>";
    $colors[0] = 'red';
    $colors[1] = 'yellow';
    $colors[3] = 'orange';
    $colors[2] = 'blue';

    foreach ($colors as $color) {
        print "$color";
    }

    echo "<br>";
    print_r($colors);
    /********************************************/


    /********************************************/
    echo "<br><br>★4-6<br>";
    $colors_2['sea'] = 'blue';
    $colors_2['leaf'] = 'green';
    $colors_2['night'] = 'black';
    $colors_2['sun'] = 'red';

    $colors_3 = $colors_2;
    print "sort()";
    echo "<br>";
    sort($colors_3);
    print_r($colors_3);
    echo "<br>";

    $colors_3 = $colors_2;
    print "asort()";
    echo "<br>";
    asort($colors_3);
    print_r($colors_3);
    echo "<br>";

    $colors_3 = $colors_2;
    print "ksort()";
    echo "<br>";
    ksort($colors_3);
    print_r($colors_3);
    echo "<br>";

    $colors_3 = $colors_2;
    print "rsort()";
    echo "<br>";
    rsort($colors_3);
    print_r($colors_3);
    echo "<br>";

    $colors_3 = $colors_2;
    print "arsort()";
    echo "<br>";
    arsort($colors_3);
    print_r($colors_3);
    echo "<br>";

    $colors_3 = $colors_2;
    print "krsort()";
    echo "<br>";
    krsort($colors_3);
    print_r($colors_3);
    echo "<br>";
    /********************************************/


    /********************************************/
    echo "<br><br>★4-8<br>";

    // implode()は文字列を連結する
    echo "implode()<br>";
    // 連結したい文字列
    $pieces = ["2018", "01", "01"];

    // 連結文字を指定して連結してみます
    echo implode("-", $pieces); // 2018-01-01
    echo "<br>";
    // 連結文字を指定せずに連結してみます
    echo implode($pieces);      // 20180101

    echo "<br>join()";
    // joinでも同様の機能が提供されていることを確認します
    echo "<br>";
    echo join("-", $pieces); // 2018-01-01
    echo "<br>";
    echo join($pieces);      // 20180101

    // explodeは文字列を分割する。
    echo "<br>explode()";
    $str = "red,blue,yellow,green";
    $colors_4 = explode(",", $str);
    echo "<br>";
    print_r($colors_4);
    /********************************************/


    /********************************************/
    echo "<br><br>★5-8<br>";
    // グローバル変数の使用例

    $num1 = 100;
    foo();
    function foo() {
        global $num1; // globalキーワードを利用する。
        print $num1;
    }

    echo "<br>";

    $num2 = 200;
    foo2();
    function foo2() {
        print $GLOBALS['num2']; // グローバル変数$num2を参照する。
    }
    /********************************************/


    /********************************************/
    echo "<br><br>★6-8<br>";
    require_once 'test_1_2_3_4_5_6_tanaka.php';
    require_once 'test_1_2_3_4_5_6_suzuki.php';

    // 名前空間をインポート
    use japan\name\tanaka as tanaka;
    use japan\name\suzuki as suzuki;

    // 名前空間で指定したクラスのオブジェクトを生成。
    $person1 = new tanaka\Taro();
    $person2 = new suzuki\Taro();
    echo '私の名前は、'.$person1->getName().'です';
    echo "<br>";
    echo '私の名前は、'.$person2->getName().'です';
    /********************************************/
?>
</body>