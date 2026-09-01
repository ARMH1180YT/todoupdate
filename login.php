<?php

trait LoginTrait {
 public function login() {
         system('cls');
         echo "=====================================\n";
         echo "|               Login               | \n";
         echo "=====================================\n";

         echo "Gmail : ";
         $gmail = trim(fgets(STDIN));

         echo "Password : ";
         $password = trim(fgets(STDIN));

         $statment = $this->db->prepare("SELECT * FROM users WHERE email = ?");
         $statment->execute([$gmail]);
         $user = $statment->fetch();
         if ($user === false) {
             echo "\n[--ErRoR--] gmail dan password salah bro.......\n";
             echo "Registrasi dulu kalo belum ada akun.....\n";
             echo "\nTekan ENTER untuk kembali...";
             fgets(STDIN);
             return null;
         } if (!password_verify($password, $user['password'])) {
             echo "\n[--ErRoR--] gmail dan password salah bro.......\n";
             echo "\nTekan ENTER untuk kembali...";
             fgets(STDIN);
             return null;
         }

         echo "\nLogin berhasil, Selamat datang, " . $user['name'] . "\n";
         sleep(1);
         return $user;
     }
 }
