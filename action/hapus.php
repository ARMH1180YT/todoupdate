<?php
trait HapusTrait {
    function hapus(&$todolist) {
        system('cls');
        echo "=====================================\n";
        echo "|            hapus Data             | \n";
        echo "=====================================\n";
        echo "List : \n";
        // for ($list = 0; $list < count($todolist); $list += 1) {
        //     echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
        // }
        for ($list = 0; $list < count($todolist); $list += 1) {
            echo $list + 1 . ". " . $todolist[$list]['title'] . PHP_EOL;
        }

        echo "\n";
        echo "Pilih nomer untuk menghapus : ";
        $delete = trim(fgets(STDIN));
        if ($delete == '0' || $delete == '') {
            return;
        }
        $delete = $delete - 1;
        if (isset($todolist[$delete])) {
            unset($todolist[$delete]);
            $todolist = array_values($todolist);
        }
    }

}
