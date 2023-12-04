<?php
    if (file_exists('model/connect.php')) {
        require "model/connect.php";
    }
    if (file_exists('connect.php')) {
        require "connect.php";
    }

    class comment_lass extends dao_con {
        public function addCmt($content, $star, $proId) {
            $sql = "INSERT INTO rate(rate_comment, rate_star, product_id, account_id) VALUES(?, ?, ?, ?)";
            return $this->conn_execute($sql, $content, $star, $proId, $_SESSION['x_user']['account_id']);
        }

        public function showCmt($a) {
            $sql = "SELECT rate.*, account.*
                    FROM rate
                    JOIN account ON rate.account_id = account.account_id
                    WHERE rate.product_id = ?
            ";
            return $this->conn_show_all($sql, $a);
        }
    }
?>