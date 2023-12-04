<?php
    session_start();
    ob_start();
    extract($_REQUEST);

    include_once "view/header.php";
    include_once "controllers/xuly_cookie.php";

    if(isset($op)) {
        switch($op) {
            case 'shop':
                include "model/product.php";
                $product = new product_lass();
                $_SESSION['saveLocation'] = '?op=shop&page=1&start=0';
                $show_xuly = $product->show_home('new');
                $show_new = $product->offset_product($_GET['start']);
                include_once "view/shop.php";
                break;
            case 'detail_pro':
                if(isset($product_id)) {
                    include "model/product.php";
                    $product = new product_lass();
                    $result = $product->show_product_detail($product_id);
                    $_SESSION['saveLocation'] = '?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'';
                } else {
                    header('location: index.php');
                }
                include_once "view/detail_product.php";
                break;
            case 'blog':
                $_SESSION['saveLocation'] = '?op=blog';
                include_once "view/blog.php";
                break;
            case 'detail-blog':
                include_once "view/detail_blog.php";
                break;
            case 'search':
                include "model/product.php";
                $product = new product_lass();
                $show_new = $product->show_search($valueKey);
                include_once "view/search.php";
                break;
            case 'about':
                $_SESSION['saveLocation'] = '?op=about';
                include_once "view/about.php";
                break;
            case 'contact':
                $_SESSION['saveLocation'] = '?op=contact';
                include_once "view/contact.php";
                break;
            case 'cart':
                if(isset($_SESSION['x_user'])) {
                    include "model/cart.php";
                    $cart = new cart_lass();
                    $results = $cart->show_cart();
                }
                $_SESSION['saveLocation'] = '?op=cart';
                include_once "view/cart.php";
                break;
            case 'checkout':
                if(isset($_SESSION['x_user'])) {
                    include "model/cart.php";
                    $cart = new cart_lass();
                    $results = $cart->show_cart();
                }
                $_SESSION['saveLocation'] = '?op=checkout';
                include_once "view/checkout.php";
                break;
            case 'login':
                include_once "view/login.php";
                break;
            case 'orderMe':
                if(isset($_SESSION['x_user'])) {
                    include "model/order.php";
                    $order = new order_lass();
                    $results = $order->show_order();
                }
                include_once "view/orderMe.php";
                break;
            case 'logout':
                include_once "controllers/xuly_cookie.php";
                break;
            default:
                include "model/product.php";
                $product = new product_lass();
                $_SESSION['saveLocation'] = '?op=home';
                $show_new = $product->show_home('new');
                $show_best = $product->show_home('best');
                $show_hot = $product->show_home('hot');
                include_once "view/home.php";
                break;
        }
    } else {
        include "model/product.php";
        $product = new product_lass();
        $_SESSION['saveLocation'] = '?op=home';
        $show_new = $product->show_home('new');
        $show_best = $product->show_home('best');
        $show_hot = $product->show_home('hot');
        include_once "view/home.php";
    }
    include_once "view/footer.php";
?>