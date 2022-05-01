<?php
include("db.php");

class data extends db {

    function addUser($name, $id, $number, $email, $pass) {
        $sql = "INSERT INTO student(name, id, number, email, password)
        VALUES('$name', $id, $number, '$email', '$pass')";
        $result = $this->connection->query($sql);
        if($result) {
            $msg = "User $name registered successfully!!";
            header("location: index.php?msg=$msg");
        }
        else {
            $msg = "Registration Failed";
            header("location: index.php?msg=$msg");
        }
    }

    function adminLogin($email, $pass) {
        $sql = "SELECT * FROM admin WHERE email='$email' and password='$pass'";
        $recordSet = $this->connection->query($sql);
        $result = $recordSet->rowCount();

        if($result > 0) {
            header("location: admin_dashboard.php");
        }
        else {
            $msg = "invalid credentials!";
            header("location: admin_login.php?msg=$msg");
        }
    }

    function usrLogin($email, $pass) {
        $sql = "SELECT * FROM student WHERE email='$email' and password='$pass'";
        $recordSet = $this->connection->query($sql);
        $result = $recordSet->rowCount();

        if($result > 0) {
            header("location: student_dashboard.php");
        }
        else {
            $msg = "invalid credentials!";
            header("location: usr_login.php?msg=$msg");
        }
    }
}

