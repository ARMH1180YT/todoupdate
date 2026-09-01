 <?php
 trait RegisTrait {
     public function register() {
         system('cls');
         echo "=====================================\n";
         echo "|             Registrasi            | \n";
         echo "=====================================\n";
         echo "naama : ";
         $name = trim(fgets(STDIN));
         if ($name == '') {
             return;
         }
         echo "gmaik : ";
         $gmail = trim(fgets(STDIN));
         if ($gmail == '') {
             return;
         }

         $statment = $this->db->prepare("SELECT id FROM users WHERE email = ?");
         $statment->execute([$gmail]);
         if ($statment->fetch()) {
             echo "\n[--ErRoR--] gmail salah, coba gunakan gmail lain\n";
             sleep(2);
             return;
         }


         echo "Password : ";
         $password = trim(fgets(STDIN));
         if ($password == ''){
              return;
         }

         // $hashedpassword = password_hash($password, PASSWORD_ARGON2I);
         $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

         $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
         $statment = $this->db->prepare($sql);
         $statment->execute([$name, $gmail, $hashedpassword]);

         echo "\nRegistrasi berhasil, sekarang login dengan akunmu\n";
         sleep(2);
     }
 }
