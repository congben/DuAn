<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include 'connect.php';

    class product_lass extends dao_con {
        public function show_home($check) {
            if($check == 'new') {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.time_reg DESC
                ";
                return $this->conn_show_all($sql);
            } else if($check == 'best') {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.product_sold DESC
                ";
                return $this->conn_show_all($sql);
            } else {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.product_view DESC
                ";
                return $this->conn_show_all($sql);
            }
        }

        public function offset_product($offset) {
            $offset = intval($offset);
            $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                    FROM (
                        SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                        FROM product y
                        JOIN image_product img ON y.product_id = img.product_id
                        GROUP BY y.product_id
                    ) AS grouped_images
                    JOIN product y ON y.product_id = grouped_images.product_id
                    JOIN category c ON y.category_id = c.category_id
                    ORDER BY y.time_reg DESC LIMIT $offset, 12
            ";
            return $this->conn_show_all($sql);
        }

        public function show_product_fill($a, $b) {
            $offset = intval($b);
            if($a == "new") {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.time_reg DESC LIMIT $offset, 12
                ";
            } else if($a == "view") {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.product_view DESC LIMIT $offset, 12
                ";
            } else if($a == "price-asc") {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.product_price ASC LIMIT $offset, 12
                ";
            } else if($a == "price-desc") {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.product_price DESC LIMIT $offset, 12
                ";
            } else {
                $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                        FROM (
                            SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                            FROM product y
                            JOIN image_product img ON y.product_id = img.product_id
                            GROUP BY y.product_id
                        ) AS grouped_images
                        JOIN product y ON y.product_id = grouped_images.product_id
                        JOIN category c ON y.category_id = c.category_id
                        ORDER BY y.time_reg DESC
                ";
            }
            return $this->conn_show_all($sql);
        }

        public function show_product_detail($a) {
            $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                    FROM (
                        SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                        FROM product y
                        JOIN image_product img ON y.product_id = img.product_id
                        GROUP BY y.product_id
                    ) AS grouped_images
                    JOIN product y ON y.product_id = grouped_images.product_id
                    JOIN category c ON y.category_id = c.category_id
                    WHERE y.product_id = ?
                    ORDER BY y.time_reg
            ";
            return $this->conn_show_one($sql, $a);
        }

        public function show_search($a) {
            $search = '%' . $a . '%';
            $sql = "SELECT y.*, grouped_images.image_files, c.category_name
                    FROM (
                        SELECT y.product_id, GROUP_CONCAT(img.image_file) AS image_files
                        FROM product y
                        JOIN image_product img ON y.product_id = img.product_id
                        GROUP BY y.product_id
                    ) AS grouped_images
                    JOIN product y ON y.product_id = grouped_images.product_id
                    JOIN category c ON y.category_id = c.category_id
                    WHERE y.product_name like '$search'
                    ORDER BY y.time_reg DESC
            ";
            return $this->conn_show_all($sql);
        }
    }
?>