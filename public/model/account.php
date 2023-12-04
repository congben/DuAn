<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include 'connect.php';

    class acc_lass extends dao_con {
        public function regAcc($firstName, $lastName, $email, $pass) {
            $sql = "INSERT INTO account(account_firstName, account_lastName, account_email, account_pass) VALUES(?, ?, ?, ?)";
            return $this->conn_execute($sql, $firstName, $lastName, $email, $pass);
        }

        public function logAcc($email, $pass) {
            $sql = "SELECT * FROM account WHERE account_email = ? AND account_pass = ?";
            return $this->conn_show_one($sql, $email, $pass);
        }

        public function checkMail($email) {
            $sql = "SELECT account_email FROM account WHERE account_email = ?";
            return $this->conn_show_one($sql, $email);
        }

        public function updateStatus($check) {
            if($check == 0) {
                $sql = "UPDATE account SET account_status = 'Offline' WHERE account_id = ?";
                return $this->conn_execute($sql, $_SESSION['x_user']['account_id']);
            } else {
                $sql = "UPDATE account SET account_status = 'Online' WHERE account_id = ?";
                return $this->conn_execute($sql, $_SESSION['x_user']['account_id']);
            }
        }
    }
?>