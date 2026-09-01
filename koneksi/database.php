 <?php
function  getconnection(){
  $host = "localhost";
  $port = 3306;
  $database = "todolist_db";
  $username = "root";
  $password = "";

try {

     $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
     echo "sukses terkoneksi ke satabase" . "\n";
     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $connection;
     } catch (PDOException $exception){
         echo "error terkoneksi ke database :" . $exception->getMessage() . PHP_EOL;
     }

}
