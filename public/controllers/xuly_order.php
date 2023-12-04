<?php
    if(session_status() == PHP_SESSION_NONE) { //Kiểm tra session đã được mở chưa, nếu chưa thì khởi tạo session để sử dụng session
        session_start();
    }
    if (file_exists('../model/cart.php')) {
        require "../model/cart.php";
    }
    if (file_exists('../model/order.php')) {
        require "../model/order.php";
    }
    extract($_REQUEST);

    if(isset($payOrder)) {
        $order = new order_lass();
        $cart = new cart_lass();

        $resultsCart = $cart->show_cart();
        $order->add_order($total, $phuongthuc, $note);
        foreach($resultsCart as $items) {
            extract($items);
            $order->add_order_details($cart_name, $cart_price, $cart_img, $cart_qty, $product_id);
        }
        if($magiamgia != "") {
            $cart->use_voucher($magiamgia);
        }
        $cart->paySuccess();
        echo '
            <style>
                .content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 200px;
                    border-radius: 10px;
                    background-color: white;
                }
                
                .content {
                    animation: slide-in 1.5s ease-in-out;
                }
                
                @keyframes slide-in {
                    0% {
                    top: -100%;
                    }
                
                    100% {
                    top: 50%;
                    }
                }
                #popup {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.6);
                    z-index: 1000;
                }
                
                .content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 200px;
                    border-radius: 10px;
                    background-color: white;
                    text-align: center;
                }
            
                #popup .content span {
                    font-size: 40px;
                    line-height: 75px;
                    font-weight: 700;
                    color: rgb(44, 69, 7);
                }
                
                h2 {
                    font-size: 24px;
                    text-align: center;
                }
                
                p {
                    font-size: 16px;
                    text-align: center;
                }
                
                .close {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    width: 30px;
                    height: 30px;
                    line-height: 30px;
                    border-radius: 50%;
                    background-color: red;
                    cursor: pointer;
                    text-decoration: none;
                    color: white;
                    font-weight: 600;
                }
                
                .close:hover {
                    background-color: #000000;
                    color: white;
                }                
            </style>
            <div id="popup">
                <div class="content">
                <h2>WebSite Thông Báo!</h2>
                <p>Thanh toán thành công!.</p>
                <span>- Thành công -</span>
                <a href="../index.php" class="close">X</a>
                </div>
            </div>
        ';
    } else if(isset($butCmt)) {
        include '../model/comment.php';
        $com = new comment_lass();
        $com->addCmt($comment, $star, $proId);
        echo '
            <style>
                .content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 200px;
                    border-radius: 10px;
                    background-color: white;
                }
                
                .content {
                    animation: slide-in 1.5s ease-in-out;
                }
                
                @keyframes slide-in {
                    0% {
                    top: -100%;
                    }
                
                    100% {
                    top: 50%;
                    }
                }
                #popup {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.6);
                    z-index: 1000;
                }
                
                .content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 200px;
                    border-radius: 10px;
                    background-color: white;
                    text-align: center;
                }
            
                #popup .content span {
                    font-size: 40px;
                    line-height: 75px;
                    font-weight: 700;
                    color: rgb(44, 69, 7);
                }
                
                h2 {
                    font-size: 24px;
                    text-align: center;
                }
                
                p {
                    font-size: 16px;
                    text-align: center;
                }
                
                .close {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    width: 30px;
                    height: 30px;
                    line-height: 30px;
                    border-radius: 50%;
                    background-color: red;
                    cursor: pointer;
                    text-decoration: none;
                    color: white;
                    font-weight: 600;
                }
                
                .close:hover {
                    background-color: #000000;
                    color: white;
                }                
            </style>
            <div id="popup">
                <div class="content">
                <h2>WebSite Thông Báo!</h2>
                <p>Cảm ơn bạn dã dành ra ít thời gian để đánh giá, chúng tôi sẽ cố gắng phát triển!.</p>
                <span>- Thành công -</span>
                <a href="../index.php?op=orderMe" class="close">X</a>
                </div>
            </div>
        ';
    }

    if(isset($check)) {
        $order = new order_lass();
        if($check == 'showDetailOrder') {
            $results = $order->showOrderDetails($id);
            $show = '
                    <div class="wishlist-area pt-60 pb-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-content table-responsive">
                                    <h2>Lịch sử đơn hàng </h2>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="li-product-thumbnail">Name san pham</th>
                                                    <th class="cart-product-name">Anh san pham</th>
                                                    <th class="li-product-price">Gia san pham</th>
                                                    <th class="li-product-stock-status">So luong</th>
                                                    <th class="li-product-add-cart">Thao tac</th>
                                                </tr>
                                            </thead>
                                            <tbody>
            ';
            foreach($results as $items) {
                extract($items);
                $show .= '
                                                <tr>
                                                    <td class="li-product-thumbnail">'. $details_name .'</td>
                                                    <td class="li-product-name"><img width="60px" src="'. $details_img .'"></td>
                                                    <td class="li-product-price"><span class="amount">$'. $details_price .'</span></td>
                                                    <td class="li-product-stock-status"><span class="pending">'. $details_qty .'</span></td>
                                                    ';
                                                    if($status == 'Giao thành công') {
                                                        if($details_feedback == 0) {
                                                            $show .= '<td class="li-product-add-cart"><a href="controllers/xuly_order.php?check=DanhGia&idPro='. $product_id .'&idDetails='. $details_id .'" style="cursor: pointer;">Danh gia ngay</a></td>';
                                                        } else {
                                                            $show .= '<td class="li-product-add-cart"><a style="cursor: pointer; color: green;">Da danh gia!</a></td>';
                                                        }
                                                    } else if($status == 'Đang xử lý') {
                                                        $show .= '<td><a style="font-size: 18px; color: red;" href="controllers/xuly_order.php?id='. $id .'&check=cancelOrder">Huy don</a></td>';
                                                    } else if($status == 'Đã hủy') {
                                                        $show .= '<td><a style="font-size: 18px; color: red;">Da Huy</a></td>';
                                                    }
                                                    $show .= '
                                                </tr>
                ';
            }
            $show .= '
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            ';

            echo $show;
        } else if($check == 'cancelOrder') {
            $order->cancelOrder($id);
            echo '
                <style>
                    .content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 400px;
                        height: 200px;
                        border-radius: 10px;
                        background-color: white;
                    }
                    
                    .content {
                        animation: slide-in 1.5s ease-in-out;
                    }
                    
                    @keyframes slide-in {
                        0% {
                        top: -100%;
                        }
                    
                        100% {
                        top: 50%;
                        }
                    }
                    #popup {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.6);
                        z-index: 1000;
                    }
                    
                    .content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 400px;
                        height: 200px;
                        border-radius: 10px;
                        background-color: white;
                        text-align: center;
                    }
                
                    #popup .content span {
                        font-size: 40px;
                        line-height: 75px;
                        font-weight: 700;
                        color: rgb(44, 69, 7);
                    }
                    
                    h2 {
                        font-size: 24px;
                        text-align: center;
                    }
                    
                    p {
                        font-size: 16px;
                        text-align: center;
                    }
                    
                    .close {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        width: 30px;
                        height: 30px;
                        line-height: 30px;
                        border-radius: 50%;
                        background-color: red;
                        cursor: pointer;
                        text-decoration: none;
                        color: white;
                        font-weight: 600;
                    }
                    
                    .close:hover {
                        background-color: #000000;
                        color: white;
                    }                
                </style>
                <div id="popup">
                    <div class="content">
                    <h2>WebSite Thông Báo!</h2>
                    <p>Hủy đơn thành công!.</p>
                    <span>- Thành công -</span>
                    <a href="../index.php?op=orderMe" class="close">X</a>
                    </div>
                </div>
            ';
        } else if($check == 'DanhGia') {
            $cate_id = $order->check_id_pro($idPro);
            $order->update_feedBack($idDetails);
            header('location: ../index.php?op=detail_pro&product_id='. $idPro .'&category_id='. $cate_id['category_id'] .'&accessCmt=on');
        } else if($check == 'showCMT') {
            include '../model/comment.php';
            $cmt = new comment_lass();
            $results = $cmt->showCmt($proID);

            foreach($results as $items) {
                extract($items);
                if($rate_star == 1) {
                    $saveStar = '<i class="fas fa-star"></i>';
                } else if($rate_star == 2) {
                    $saveStar = '<i class="fas fa-star"></i><i class="fas fa-star"></i>';
                } else if($rate_star == 3) {
                    $saveStar = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
                } else if($rate_star == 4) {
                    $saveStar = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
                } else {
                    $saveStar = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
                }
                $fullName = $account_firstName . ' ' . $account_lastName;
                echo '
                    <h4 class="title-block">'. $fullName .'</h4>
                    '. $saveStar .'
                    <p>'. $rate_comment .'</p>
                ';
            }
        } else if($check == 'countOrderHeader') {
            if(isset($_SESSION['x_user'])) {
                $results = $order->show_order();
                $dem = 0;
                foreach($results as $a) {
                    if($a['order_status'] != 'Đã hủy') {
                        $dem++;
                    }
                }
                echo '
                    <a href="?op=orderMe">
                        <span class="cart-item-count wishlist-item-count">'. $dem .'</span>
                        <i class="fad fa-shopping-cart"></i>
                    </a>
                ';
            } else {
                echo '
                    <a href="?op=orderMe">
                        <span class="cart-item-count wishlist-item-count">0</span>
                        <i class="fad fa-shopping-cart"></i>
                    </a>
                ';
            }
        }
    }
?>