<?php
trait EditTrait {
    function edit(&$todolist) {
        system('cls');
        echo "=====================================\n";
        echo "|            Edit Data              | \n";
        echo "=====================================\n";
        echo "List : \n";

        for ($list = 0; $list < count($todolist); $list += 1) {
            echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
        }
        echo "\n";
        echo "Pilih nomor untuk mengedit : ";

        $edit = trim(fgets(STDIN));
        if ($edit == '0' || $edit == '') {
            return;
        }

        $edit = $edit - 1;
        if (isset($todolist[$edit])) {
            echo "Judul : ";
            $title = trim(fgets(STDIN));
            if ($title == '0' || $title == '') {
                return;
            }
            echo "Deskripsi : ";

            $message = trim(fgets(STDIN));
            if ($message == '0' || $message == '') {
                return;
            }
            $todolist[$edit]['title'] = $title;
            $todolist[$edit]['message'] = $message;
        }
        echo "Data berhasil diubah.\n";
        echo "\n";
    }

}
