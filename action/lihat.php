<?php
trait LihatTrait{
    function lihat(&$todolist) {
        system('cls');
        echo "=====================================\n";
        echo "|            Lihat Data             | \n";
        echo "=====================================\n";
        for ($list = 0; $list < count($todolist); $list += 1) {
            echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
        }
        echo "pilih nomesr untuk melihat detail\n";

        $detail = trim(fgets(STDIN));
        if ($detail == '' || $detail == '0') {
            return;
        }

        if (isset($todolist[$detail - 1])) {
            system('cls');
            echo "==================\n";
            echo "judul: {$todolist[$detail - 1]['title']}\n";
            echo "deskripsi: {$todolist[$detail - 1]['message']}\n";
            echo "tekan enter untuk kembali\n";
            $detail = trim(fgets(STDIN));
        }
        echo "\n";
    }

}
