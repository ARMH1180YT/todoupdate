<?php
trait EditTrait {
    function edit() {
        system('cls');
        echo "=====================================\n";
        echo "|            Edit Data              | \n";
        echo "=====================================\n";
        echo "List : \n";

        for ($list = 0; $list < count($this->todolist); $list += 1) {
                    echo $list + 1 . ". " . $this->todolist[$list]['title'] . "\n";
         }
        echo "\n";
        echo "Pilih nomor untuk mengedit : \n";
        echo "ketik 0 atau enfer untuk kembali ke menu awal : \n";

        $edit = trim(fgets(STDIN));
        if ($edit == '0' || $edit == '') {
            return;
        }

        $index = (int)$edit - 1;
        if (isset($this->todolist[$index])) {
            $idDatabase = $this->todolist[$index]['id'];
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
            $sql = "UPDATE todolist SET title = ?, message = ? WHERE id = ?";
            $statment = $this->db->prepare($sql);
            $statment->execute([$title, $message, $idDatabase]);
                echo "UPDATE";
                sleep(1);
        }

    }

}
