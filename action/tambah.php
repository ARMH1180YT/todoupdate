<?php
trait TambahTrait {
    function tambah() {
        if (empty($this->user) || !isset($this->user['id'])) {
            echo "\n[--eRrOr--] Kamu belum login\n";
            echo "Silakan login terlebih dahulu\n";
            sleep(2);
            return;
        }

        system('cls');
        echo "=====================================\n";
        echo "|            Tambah Data            | \n";
        echo "=====================================\n";
        echo "klik enter atau ketik 0 untuk keluar\n\n";

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

        $sql = "INSERT INTO todolist (user_id, title, message) VALUES (?, ?, ?)";
        $statment = $this->db->prepare($sql);
        $statment->execute([$this->user['id'], $judul, $deskripsi]);

        echo "\nberhasil di tambah cuyyy\n";
        sleep(1);
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
