<?php

require_once 'koneksi/database.php';
require_once 'login.php';
require_once 'registrasi.php';
require_once 'action/tambah.php';
require_once 'action/lihat.php';
require_once 'action/edit.php';
require_once 'action/hapus.php';

class Todo {
    use RegisTrait, LoginTrait, EditTrait, HapusTrait, LihatTrait, TambahTrait;

    private $db;
    private $todolist = [];
    private $user = null;
    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function keamanan() {
        while (true) {
            // kalo misal user belum login nanti di arahkan ke menu login
            if ($this->user === null) {
                $this->user();
                // kalo sudah login otomatis di arahkan di menutodolist e
            } else {
                $this->menutodolist();
            }
        }
    }

    // ============================== menu login, regis, keluar ==================================
    private function user() {
        system('cls');
        echo "=====================================\n";
        echo "|             Todolist                  | \n";
        echo "=====================================\n";
        echo "1. Login\n";
        echo "2. Registrasi\n";
        echo "3. Exit\n\n";
        echo "Pilih menu : ";
        $select = trim(fgets(STDIN));

        if ($select == '1') {
            $loggedUser = $this->login();
            if ($loggedUser) {
                $this->user = $loggedUser;
            }
        } elseif ($select == '2') {
            $this->register();
        } elseif ($select == '3') {
            echo "Bye-bye\n";
            sleep(1);
            exit;
        }
    }

    // ============================================== menu todolist =============================================

    private function menutodolist() {
        $statment = $this->db->prepare("SELECT * FROM todolist WHERE user_id = ? ORDER BY id ASC");
        $statment->execute([$this->user['id']]);
        $this->todolist = $statment->fetchAll();

        system('cls');
        echo "=====================================\n";
        echo  "welcomme\n" . $this->user['name'] . "!\n";
        echo "=====================================\n";

        echo "LIST : \n" . count($this->todolist) . " data\n";
        for ($list = 0; $list < count($this->todolist); $list += 1) {
            echo $list + 1 . ". " . $this->todolist[$list]['title'] . "\n";
        }

        echo "\n";
        echo "1. Tambah data\n";
        echo "2. Lihat data\n";
        echo "3. Edit data\n";
        echo "4. Delete data\n";
        echo "5. Logout\n";
        echo "Pilih menu: ";

        $select = trim(fgets(STDIN));

        if ($select == '1') {
            system('cls');
            $this->tambah();
        } elseif ($select == '2') {
            system('cls');
            $this->lihat();
        } elseif ($select == '3') {
            system('cls');
            $this->edit();
        } elseif ($select == '4') {
            system('cls');
            $this->hapus();
        } elseif ($select == '5') {
            $this->user = null;
            echo "Berhasil Logout!\n";
            sleep(1);
        }
    }
}


$db = getConnection();
$note = new Todo($db);
$note->keamanan();
