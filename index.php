<?php
require_once 'tambah.php';
require_once 'lihat.php';
require_once 'edit.php';
require_once 'hapus.php';

$todolist = [];

while (true) {
    echo "=====================================\n";
    echo "|            Todolist              | \n";
    echo "=====================================\n";
    echo "LIST : \n" . count($todolist) . " data\n";
    for ($list = 0; $list < count($todolist); $list += 1) {
        echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
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
        tambah($todolist);
    }

// melihat isi data ==================================================
    elseif ($select == 2) {
        system('cls');
        lihat($todolist);
    }

    // bagian edir =======================================================================================
    elseif ($select == 3) {
        system('cls');
        edit($todolist);
    }


    // bagian hapus data ====================================================================
    else if ($select == 4) {
        system('cls');
        hapus($todolist);
    }
    else if ($select == 5) {
        exit;
    }
}
