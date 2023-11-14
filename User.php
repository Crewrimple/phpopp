<?php
require_once "Config.php";

class User extends Config {

    public function getAllUser() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        
        if($result->num_rows > 0) {
            $rows = array();
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function addUser($username, $email, $password, $firstname, $lastname, $birthdate) {
        //check if the username and email is already in the database
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = $this->conn->query($sql);

        //check if there are records returned
        if($result->num_rows > 0) {
            return "Username or Email already exist.";
        } 
        else {
            //convert the password into an encrypted text
            $hashed_password = md5($password);
            //Insert the data in users table
            $sql = "INSERT INTO users(username, email, password, firstname, lastname, birthdate)
                    VALUES('$username', '$email', '$hashed_password', '$firstname', '$lastname', '$birthdate')";
            $result = $this->conn->query($sql);

            if($result == TRUE) {
                header("Location: userlist.php");
            }
            else {
                echo "Error:" . $this->conn->error;
            }
        }
    }

    public function getOneUser($user_id) {
        $sql = "SELECT * FROM users WHERE user_id = $user_id";
        $result = $this->conn->query($sql);

        //check if there is a result
        if($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            echo "Error.".$this->conn->error;
        }
    }

    public function updateUser($user_id, $username, $email, $firstname, $lastname, $birthdate) {
        //check if the username and email is in the database
        $sql = "SELECT * FROM users WHERE username='$username' AND user_id != $user_id OR email='$email' AND user_id != $user_id";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0) {
            return "Username or Email already exist.";
        } else {
            $sql = "UPDATE users SET username='$username', email='$email', firstname='$firstname',
                    lastname='$lastname', birtdate='$birthdate' WHERE user_id=$user_id";
            $result = $this->conn->query($sql);
            if($result == FALSE) {
                echo "ERROR: " . $this->conn->error;
            } else {
                header("Location: userlist.php");
            }
        }
    }

    public function deleteUser($user_id) {
        $sql = "DELETE FROM users WHERE user_id=$user_id";

        $result = $this->conn->query($sql);

        if($result == FALSE){
            echo "Error: " . $this->conn->error;
        } else {
            header("Location: userlist.php");
        }
    }
}