<?php
    include 'connect.php';
    class cart_lass extends dao_con {
        public function addToCart($name, $price, $img, $qty, $id) {
            $sql = "INSERT INTO cart(cart_name, cart_price, cart_img, cart_qty, product_id, account_id) VALUES(?, ?, ?, ?, ?, ?)";
            return $this->conn_execute($sql, $name, $price, $img, $qty, $id, $_SESSION['x_user']['account_id']);
        }

        public function show_cart() {
            $sql = "SELECT * FROM cart WHERE account_id = ?";
            return $this->conn_show_all($sql, $_SESSION['x_user']['account_id']);
        }

        public function updateQtyCart($qty, $id) {
            $sql = "UPDATE cart SET cart_qty = cart_qty + ? WHERE product_id = ? AND account_id = ?";
            return $this->conn_execute($sql, $qty, $id, $_SESSION['x_user']['account_id']);
        }

        public function upQTYonCart($qty, $id) {
            $sql = "UPDATE cart SET cart_qty = ? WHERE cart_id = ? AND account_id = ?";
            return $this->conn_execute($sql, $qty, $id, $_SESSION['x_user']['account_id']);
        }

        public function delCart($a) {
            $sql = "DELETE FROM cart WHERE cart_id = ?";
            return $this->conn_execute($sql, $a);
        }

        public function checkDiscount($a) {
            $sql = "SELECT * FROM discount_code WHERE code_gift = ? AND code_qty > 0";
            return $this->conn_show_one($sql, $a);
        }

        public function paySuccess() {
            $sql = "DELETE FROM cart WHERE account_id = ?";
            return $this->conn_execute($sql, $_SESSION['x_user']['account_id']);
        }

        public function use_voucher($a) {
            $sql = "UPDATE discount_code SET code_qty = code_qty - 1 WHERE code_gift = ?";
            return $this->conn_execute($sql, $a);
        }
    }
?>