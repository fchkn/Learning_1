<?php
    $data = [
        ['ID', '名前', '年齢'],
        ['1', '田中', '30'],
        ['2', '小林', '26'],
        ['3', '江口', '32']
    ];

    $filepath = 'test_9-6_output/test_9-6_output.csv';
    
    $file = new SplFileObject($filepath, 'w');
    
    // csvファイルの書き出し。
    foreach ($data as $line) {
        $file->fputcsv($line);
    }

    // HTTPヘッダを設定
    header('Content-Type: text/csv');
    header('Content-Length: '.filesize($filepath));
    header('Content-Disposition: attachment; filename=test_9-6_downlode.csv');
    
    // ファイル出力（ダウンロード）
    readfile($filepath);

?>