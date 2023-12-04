<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include 'connect.php';

    class order_lass extends dao_con {
        public function show_order() {
            $sql = "SELECT orders.*, account.account_firstName, account.account_lastName
                    FROM orders
                    JOIN account ON orders.account_id = account.account_id
                    ORDER BY orders.time_reg DESC
            ";
            return $this->conn_show_all($sql);
        }

        public function updateSelect($status, $id) {
            $sql = "UPDATE orders SET order_status = ? WHERE order_id = ?";
            return $this->conn_execute($sql, $status, $id);
        }
    }
?>