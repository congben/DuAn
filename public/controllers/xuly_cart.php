<?php
    if(session_status() == PHP_SESSION_NONE) { //Kiểm tra session đã được mở chưa, nếu chưa thì khởi tạo session để sử dụng session
        session_start();
    }
    if (file_exists('../model/cart.php')) {
        require "../model/cart.php";
    }
    extract($_REQUEST);

    if(isset($addToCartDetail)) {
        $cart = new cart_lass();
        $check = false;
        $results = $cart->show_cart();
        foreach($results as $a) {
            extract($a);
            if($product_id == $id) {
                $check = true;
            }
        }
        if($check == true) {
            $cart->updateQtyCart($qty, $id);
            $location = $_SESSION['saveLocation'];
            echo '
                <script>
                    window.location.href = "../'. $location .'";
                </script>
            ';
        } else {
            $cart->addToCart($name, $price, $img, $qty, $id);
            $location = $_SESSION['saveLocation'];
            echo '
                <script>
                    window.location.href = "../'. $location .'";
                </script>
            ';
        }
    } else if(isset($checkDiscount)) {
        $cart = new cart_lass();
        $results = $cart->checkDiscount($coupon_code);
        if($results > 0) {
            header('location: ../index.php?op=cart&discount='. $results['code_reduced'] .'&codeGift='. $results['code_gift'] .'');
        } else {
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
                    <p>Thêm mã giảm giá thất bại, mã sai hoặc hết lượt sử dụng!.</p>
                    <span>- Thất bại -</span>
                    <a href="../index.php?op=cart" class="close">X</a>
                    </div>
                </div>
            ';
        }
    }
    if(isset($_SESSION['x_user'])) {
        if(isset($check)) {
            $cart = new cart_lass();
            if($check == 'countCartHeader') {
                $results = $cart->show_cart();
                $countCart = 0;
                $totalTemp = 0;
                $countTotalPrice = 0;
                foreach($results as $a) {
                    extract($a);
                    $countCart++;
                    $totalTemp = $cart_price * $cart_qty;
                    $countTotalPrice += $totalTemp;
                }
                $show = '
                    <div class="hm-minicart-trigger">
                            <span class="item-icon"></span>
                            <span class="item-text">$'. $countTotalPrice .'
                                <span class="cart-item-count">'. $countCart .'</span>
                            </span>
                        </div>
                        <span></span>
                        <div class="minicart">
                ';
                foreach($results as $a) {
                    extract($a);
                    $show .= '
                        <ul class="minicart-product-list">
                            <li>
                                <a href="single-product.html" class="minicart-product-image">
                                    <img src="'. $cart_img .'" alt="cart products">
                                </a>
                                <div class="minicart-product-details">
                                    <h6><a>'. $cart_name .'</a></h6>
                                    <span>$'. $cart_price .' x '. $cart_qty .'</span>
                                </div>
                                <button class="close" title="Remove">
                                    <i class="fa fa-close"></i>
                                </button>
                            </li>
                        </ul>
                    ';
                }
                $show .= '
                        <p class="minicart-total">SUBTOTAL: <span>$'. $countTotalPrice .'</span></p>
                        <div class="minicart-button">
                            <a href="?op=cart" class="li-button li-button-fullwidth li-button-dark">
                                <span>View Full Cart</span>
                            </a>
                        </div>
                    </div>
                    <script>
                    $(".ht-setting-trigger, .ht-currency-trigger, .ht-language-trigger, .hm-minicart-trigger, .cw-sub-menu").on("click", function (e) {
                        e.preventDefault();
                        $(this).toggleClass("is-active");
                        $(this).siblings(".ht-setting, .ht-currency, .ht-language, .minicart, .cw-sub-menu li").slideToggle();
                    });
                    $(".ht-setting-trigger.is-active").siblings(".catmenu-body").slideDown();
            /*----------------------------------------*/
                    </script>
                ';
                echo $show;
            } else if($check == 'upQTYonCart') {
                $cart->upQTYonCart($valueQty, $valueID);
            } else if($check == 'qtybang0AutoDel') {
                $cart->delCart($valueID);
                $location = '../' . $_SESSION['saveLocation'];
                echo '
                    <script>
                        window.location.href = "'. $location .'";
                    </script>
                ';
            }
        }
    }
?>