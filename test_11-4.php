<?php
    $url = "http://www.example.com/";

    //cURLセッションを初期化する(cURL ハンドルを得る)
    $ch = curl_init();

    //送信データを指定
    $data = array('samurai' => 1);

    //URLとオプションを指定する
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POST, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    
    //URLの情報を取得する(実行)
    $res =  curl_exec($ch);
    var_dump($res);

    //リクエストに関する情報を返す。
    $info = curl_getinfo($ch);
    var_dump($info);
    echo "<br><br><br>";

    // HTTP ステータスコードを調べます
    if (!curl_errno($ch)) {
        switch ($http_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE)) {
            case 200:  # OK
                echo "http_code: ".$http_code."<br>OK!!";
                break;
            default:
                echo 'Unexpected HTTP code: ', $http_code, "\n";
                $error = curl_error($ch); /* エラーを取得 */
                echo "erro_info: ". $error;
        }
    }
    
    //セッションを終了する
    curl_close($ch);

?>