<?php
trait TambahTrait {
    function tambah(&$todolist) {
        system('cls');
        echo "=====================================\n";
        echo "|            Tambah Data            | \n";
        echo "=====================================\n";
        echo "tekan ENTER untuk keluar\n";

        // membuat judul dan deskripsi
        echo "JUDUL: ";
        $judul = trim(fgets(STDIN));
        if ($judul == '' || $judul == '0') {
            return;
        }

        echo "deskripsi: ";
        $deskripsi = trim(fgets(STDIN));
        if ($deskripsi == '' || $deskripsi == '0') {

            return;
        }

        $todolist[] = ['title' => $judul, 'message' => $deskripsi];
        echo "\n";
    }

}


// <?php

// function tambah(&$todolist)
// {
//     system('cls');

//     echo "====== tambah data =========\n";
//     echo "tekan ENTER untuk kembali\n";

//     echo "JUDUL: ";
//     $judul = trim(fgets(STDIN));

//     if ($judul == '') {
//         return;
//     }

//     echo "DESKRIPSI: ";
//     $deskripsi = trim(fgets(STDIN));

//     if ($deskripsi == '') {
//         return;
//     }

//     $todolist[] = [
//         'title' => $judul,
//         'message' => $deskripsi
//     ];
// }
