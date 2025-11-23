<?php
namespace App\Controllers;

use App\Config;

class GuestbookController
{
    public function getAll()
    {
        $connection = null;

        try{
            //create connection string
            $connectionString = 'mysql:host=' . Config::DB_SERVER_NAME . ';dbname=' . Config::DB_NAME . ';charset=utf8mb4';

            //create new PDO connection
            $connection = new \PDO(
                $connectionString,
                Config::DB_USERNAME,
                Config::DB_PASSWORD
            );
            //Tell PDO to throw exceptions on error
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $sql = 'SELECT id, posted_at, name, email, message FROM posts';
            $result = $connection->query($sql);
            $posts = $result->fetchAll(\PDO::FETCH_ASSOC);
            require(__DIR__ . '/../Views/guestbook.php');
        }
        catch(\PDOException $e){
            //Handle connection error
            die("Database Connection Failed: " . $e->getMessage());
        }
        
    }
    public function createMessage()
    {
        $connection = null;
        try{
            $connectionString = 'mysql:host=' . Config::DB_SERVER_NAME . ';dbname=' . Config::DB_NAME . ';charset=utf8mb4';
            //create new PDO connection
                $connection = new \PDO(
                    $connectionString,
                    Config::DB_USERNAME,
                    Config::DB_PASSWORD
                );
            $statement = $connection->prepare(
                'INSERT INTO posts (name, email, message) VALUES (:name, :email, :message)'
            );

            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $message = $_POST['message'] ?? '';

            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':message', $message);

            $statement->execute();

            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $sql = 'SELECT id, posted_at, name, email, message FROM posts';
            $result = $connection->query($sql);
            $posts = $result->fetchAll(\PDO::FETCH_ASSOC);
            require(__DIR__ . '/../Views/guestbook.php');
        }
        catch(\PDOException $e){
            //Handle connection error
            die("Database Connection Failed: " . $e->getMessage());
        }   
    }
}
