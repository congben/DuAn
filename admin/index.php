<?php

session_start();
ob_start();

// include ("./../Model/database.php");
include("view/header.php");

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'ql_sp':
            include 'model/xl_product.php';
            $product = new xl_product_lass();
            $resultes = $product->show_product();
            include("view/ql_sanpham.php");
            break;
        case 'ql_dm':
            include("view/ql_danhmuc.php");
            break;
        case 'ql_tk':
            include("view/ql_taikhoan.php");
            break;
        case 'updateOrder':
            include("view/update_order.php");
            break;
        case 'ql_dh':
            include 'model/order.php';
            $order = new order_lass();
            $results = $order->show_order();
            include("view/ql_dh.php");
            break;
        default:
            include("View/trangchu.php");
            break;
    }
} else {
    include("View/trangchu.php");
}
include("view/footer.php");
?>