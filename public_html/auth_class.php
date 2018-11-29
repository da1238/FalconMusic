<?php
class login
{
    private $database;
    function __construct($pdo)
    {
        $this->database = $pdo;
    }
    public function register($name, $email, $password, $phone, $gender)
    {
        global $pdo;
        try {
            $sql = "";
            $stmt = $this->database->prepare
            ("INSERT INTO `user` (`User_ID`, `Password`, `Salt`, `Username`, `Phone_No`, `Email`, `Gender`, `Is_Admin`)
              VALUES (NULL, '$password', NULL, '$name', '$phone', '$email', '$gender', '0')");
            echo $sql; exit();
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
            return false;
        }
    }
}
