<?php
    if (file_exists('model/connect.php')) {
        require "model/connect.php";
    }

    class order_lass extends dao_con {
        public function add_order($a, $b, $c) {
            $sql = "INSERT INTO orders(order_total, order_pay, order_note, account_id) VALUES(?, ?, ?, ?)";
            return $this->conn_execute($sql, $a, $b, $c, $_SESSION['x_user']['account_id']);
        }
        
        public function add_order_details($a, $b, $c, $d, $e) {
            $sql = "INSERT INTO order_details (details_name, details_price, details_img, details_qty, product_id, order_id) VALUES (?, ?, ? , ?, ?, (SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1))";
            return $this->conn_execute($sql, $a, $b, $c, $d, $e);
        }

        public function show_order() {
            $sql = "SELECT * FROM orders WHERE account_id = ?";
            return $this->conn_show_all($sql, $_SESSION['x_user']['account_id']);
        }

        public function showOrderDetails($a) {
            $sql = "SELECT * FROM order_details WHERE order_id = ?";
            return $this->conn_show_all($sql, $a);
        }

        public function cancelOrder($a) {
            $sql = "UPDATE orders SET order_status = 'Đã hủy' WHERE order_id = ?";
            return $this->conn_execute($sql, $a);
        }

        public function check_id_pro($a) {
            $sql = "SELECT * FROM product WHERE product_id = ?";
            return $this->conn_show_one($sql, $a);
        }

        public function update_feedBack($a) {
            $sql = "UPDATE order_details SET details_feedback = 1 WHERE details_id = ?";
            return $this->conn_execute($sql, $a);
        }
    }
?>