<?php

    // 全てのエラー出力をオフにする
    //error_reporting(0);

    // 単純な実行時エラーを表示する
    //error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // E_NOTICE を表示させるのもおすすめ（初期化されていない
    // 変数、変数名のスペルミスなど…）
    //error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

    // E_NOTICE 以外の全てのエラーを表示する
    error_reporting(E_ALL & ~E_NOTICE);

    // 全ての PHP エラーを表示する
    //error_reporting(E_ALL);

    // 全ての PHP エラーを表示する
    //error_reporting(-1);

    // error_reporting(E_ALL); と同じ
    //ini_set('error_reporting', E_ALL);

    // エラーを表示する場合
    ini_set( 'display_errors', 1 );

    // エラーを表示しない場合
    //ini_set( 'display_errors', 0 );

    //エラーをログに保存する場合
    ini_set("log_errors","on");
    //エラーを/log/error.logに保存する。
    ini_set("error_log", dirname(__FILE__) ."/log/test_12-2_error.log");

    $x = 10;
    echo $x;
    echo $y;

?>