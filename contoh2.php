// <?php

// $todolist = [];

// while (true) {
//     echo "=============================================\n";
//     echo "LIST : \n" . count($todolist) . " data\n";
//     for ($list = 0; $list < count($todolist); $list += 1) {
//         echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
//     }
//     // menu awal =======================================================================================
//     echo "\n";
//     echo "1. tambah data\n";
//     echo "2. lihat data\n";
//     echo "3. Edit sata\n";
//     echo "4. Delete sata\n";
//     echo "5. Exit\n";
//     echo "\n";
//     echo "pilih list atas: ";
//     echo "\n";
//     $select = trim(fgets(STDIN));

//     // tambah sata ===========================================================
//     if ($select == 1) {
//         system('cls');
//         echo "====== tambah data =========\n";
//         echo "tekan ENTER untuk keluar\n";

//         // membuat judul dan deskripsi
//         echo "JUDUL: ";
//         $judul = trim(fgets(STDIN));

//         echo "deskripsi: ";
//         $deskripsi = trim(fgets(STDIN));
//         $todolist[] = ['title' => $judul, 'message' => $deskripsi];
//         echo "\n";
//     }

// // melihat isi data ==================================================
//     elseif ($select == 2) {
//         system('cls');
//         echo "========= lihat isi data =========\n";
//         for ($list = 0; $list < count($todolist); $list += 1) {
//             echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
//         }
//         echo "pilih nomesr untuk melihat detail\n";
//         $detail = trim(fgets(STDIN));
//         if (isset($todolist[$detail - 1])) {
//             system('cls');
//             echo "==================\n";
//             echo "judul: {$todolist[$detail - 1]['title']}\n";
//             echo "deskripsi: {$todolist[$detail - 1]['message']}\n";
//             echo "tekan enter untuk kembali\n";
//             $detail = trim(fgets(STDIN));
//         }
//         echo "\n";
//     }

//     // bagian edir =======================================================================================
//     elseif ($select == 3) {
//         system('cls');
//         echo "====== Edit Data ============= \n";
//         echo "List : \n";

//         for ($list = 0; $list < count($todolist); $list += 1) {
//             echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
//         }
//         echo "\n";
//         echo "Pilih nomor untuk mengedit : ";

//         $edit = trim(fgets(STDIN));

//         $edit = $edit - 1;
//         if (isset($todolist[$edit])) {
//             echo "Judul : ";

//             $title = trim(fgets(STDIN));
//             echo "Deskripsi : ";

//             $message = trim(fgets(STDIN));
//             $todolist[$edit]['title'] = $title;
//             $todolist[$edit]['message'] = $message;
//         }
//         echo "\n";
//     }

//     // bagian hapus data ====================================================================
//     else if ($select == 4) {
//         system('cls');
//         echo "====== Hapus Data ============= \n";
//         echo "List : \n";
//         // for ($list = 0; $list < count($todolist); $list += 1) {
//         //     echo $list + 1 . ". " . $todolist[$list]['title'] . "\n";
//         // }
//         for ($list = 0; $list < count($todolist); $list += 1) {
//             echo $list + 1 . ". " . $todolist[$list]['title'] . PHP_EOL;
//         }

//         echo "\n";
//         echo "Pilih nomer untuk menghapus : ";

//         $delete = trim(fgets(STDIN));
//         $delete = $delete - 1;
//         if (isset($todolist[$delete])) {
//             unset($todolist[$delete]);
//             $todolist = array_values($todolist);
//         }
//     }
//     else if ($select == 5) {
//         exit;
//     }
// }
