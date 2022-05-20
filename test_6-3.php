<?php
    class TestClass{
    
      public static function testStatic() {
        echo "静的(スタティック）メソッド<br>";
      }
      
      
      public function testInstance() {
        echo "動的(インスタンス)メソッド<br>";
      }
    }
    
    //「クラス::」での呼び出し
    TestClass::testStatic(); //出力結果: 静的(スタティック）メソッド：
    //TestClass::testInstance(); //出力結果: エラー：
    
    //「オブジェクト->」での呼び出し
    $obj = new TestClass;

    $obj->testInstance(); //出力結果: 動的(インスタンス)メソッド：
    $obj->testStatic(); //出力結果: 静的(スタティック）メソッド：
    
    $obj::testStatic(); //出力結果: 静的(スタティック）メソッド：
    //$obj::testInstance(); //出力結果: エラー：
?>
