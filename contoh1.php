<?php
$todolist = [];

while (true) {
    echo "1. Tambah Todolist\n";
    echo "2. Lihat Todolist\n";
    echo "3. Keluar\n";
    $select = trim(readline("pilih: "));

    if ($select == 1) {
        system('cls');
        echo "tambah todolist\n";
        $todolist[] = trim(readline("masukkan todolist: "));
        echo "todolist berhasil ditambahkan\n";
    } elseif ($select == 2) {
        system('cls');
        echo "lihat todolist\n";
        foreach ($todolist as $item) {
            echo "- $item\n";
        }
    } elseif ($select == 3) {
        break;
    }
}
