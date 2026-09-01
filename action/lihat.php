<?php
trait LihatTrait{
    function lihat() {
        system('cls');
        echo "=====================================\n";
        echo "|            Lihat Data             | \n";
        echo "=====================================\n";
        for ($list = 0; $list < count($this->todolist); $list += 1) {
                    echo $list + 1 . ". " . $this->todolist[$list]['title'] . "\n";
         }
        echo "pilih nomesr untuk melihat detail\n";
        echo "kilik 0 atau enter untuk kembali ke mebu awal\n";

        $detail = trim(fgets(STDIN));
        if ($detail == '' || $detail == '0') {
            return;
        }
        $index = (int)$detail - 1;

        if (isset($this->todolist[$index])) {
            system('cls');
            echo "==================\n";
            echo "Judul : " . $this->todolist[$index]['title'] . "\n";
            echo "Deskripsi : " . $this->todolist[$index]['message'] . "\n";
            echo "tekan enter untuk kembali\n";
            $detail = trim(fgets(STDIN));
        } else {
            echo "tidak ketemu datanya bos\n";
sleep(1);
        }
        echo "\n";
    }

}
