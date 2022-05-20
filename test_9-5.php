<?php
    $file = fopen("test_9-5.csv", "rb");

    while ($row_words = fgetcsv($file)) {
        $row_words_count = count($row_words);

        foreach ($row_words as $index => $row_word) {
            print $row_word;

            if ($index + 1 != $row_words_count) {
                print ",";
            }
        }
        print "<br>";
    }

    fclose($file);
?>