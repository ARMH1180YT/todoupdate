<?php
trait HapusTrait {
    function hapus() {
        system('cls');
        echo "=====================================\n";
        echo "|            hapus Data             | \n";
        echo "=====================================\n";
        echo "List : \n";
        // for ($list = 0; $list < count($todolist); $list += 1) {
        //     echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
        // }
        for ($list = 0; $list < count($this->todolist); $list += 1) {
                    echo $list + 1 . ". " . $this->todolist[$list]['title'] . "\n";
         }

        echo "\n";
        echo "Pilih nomer untuk menghapus : ";
        $delete = trim(fgets(STDIN));
        if ($delete == '0' || $delete == '') {
            return;
        }
        $index = $delete - 1;
        if (isset($this->todolist[$index])) {
            $idDatabase = $this->todolist[$index]['id'];
        $sql = "DELETE FROM todolist WHERE id = ?";
        $statment = $this->db->prepare($sql);
        $statment->execute([$idDatabase]);

        echo "berhasil dihapus cuy  \n";
        sleep(1);

        }
    }

}
