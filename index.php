<?php
require_once 'action/tambah.php';
require_once 'action/lihat.php';
require_once 'action/edit.php';
require_once 'action/hapus.php';



class Todo {
    use EditTrait, HapusTrait, LihatTrait, TambahTrait;

private $todolist = [];

    public function todolist() {

    while (true) {
        system('cls');
        echo "=====================================\n";
        echo "|            Todolist              | \n";
        echo "=====================================\n";
        echo "LIST : \n" . count($this->todolist) . " data\n";
        for ($list = 0; $list < count($this->todolist); $list += 1) {
            echo $list + 1 . ". " . $this->todolist[$list]['title'] . "\n";
        }
        // menu awal =======================================================================================
        echo "\n";
        echo "1. tambah data\n";
        echo "2. lihat data\n";
        echo "3. Edit sata\n";
        echo "4. Delete sata\n";
        echo "5. Exit\n";
        echo "\n";
        echo "pilih list atas: ";
        echo "\n";

        $select = trim(fgets(STDIN));

        // tambah sata ===========================================================
        if ($select == 1) {
            system('cls');
            $this->tambah($this->todolist);
        }

    // melihat isi data ==================================================
        elseif ($select == 2) {
            system('cls');
            $this->lihat($this->todolist);
        }

        // bagian edir =======================================================================================
        elseif ($select == 3) {
            system('cls');
            $this->edit($this->todolist);
        }


        // bagian hapus data ====================================================================
        else if ($select == 4) {
            system('cls');
            $this->hapus($this->todolist);
        }
        else if ($select == 5) {
            exit;
        }
    }


    }
}

$note = new Todo();
$note->todolist();
