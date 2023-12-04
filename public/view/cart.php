<?php
    if(isset($_SESSION['x_user'])) {
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">remove</th>
                                    <th class="li-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $total_pro = 0;
                                    $subTotal = 0;
                                    foreach($results as $items) {
                                        extract($items);
                                        $total_pro = $cart_price * $cart_qty;
                                        $subTotal += $total_pro;
                                        echo '
                                            <tr>
                                                <input type="hidden" class="cart_id" value="'. $cart_id .'">
                                                <td class="li-product-remove"><a href="controllers/xuly_cart.php?valueID='. $cart_id .'&check=qtybang0AutoDel"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img width="70px" src="'. $cart_img .'" alt="Lis Product Image"></a></td>
                                                <td class="li-product-name"><a href="#">'. $cart_name .'</a></td>
                                                <td class="li-product-price"><span class="amount">$'. $cart_price .'</span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="'. $cart_qty .'" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">$'. $total_pro .'</span></td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <form action="controllers/xuly_cart.php" method="post">
                                        <input id="coupon_code" class="input-text" name="coupon_code" placeholder="Coupon code" type="text">
                                        <input class="button" type="submit" name="checkDiscount" value="Apply coupon" type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>$<?=$subTotal?></span></li>
                                    <?php
                                        $totalCart = 0;
                                        $giamgia = 0;
                                        if(isset($discount)) {
                                            $giamgia = $discount / 100;
                                            $giamgia = 1 - $giamgia;
                                            $totalCart = $subTotal * $giamgia;
                                            echo '<li>Voucher <span>'. $discount .'%</span></li>';
                                        } else {
                                            $discount = 0;
                                            $totalCart = $subTotal;
                                        }
                                    ?>
                                    <li>Shipping <span>Free</span></li>
                                    <li>Total <span>$<?=$totalCart?></span></li>
                                </ul>
                                <form action="?op=checkout" method="post">
                                    <input type="hidden" name="total" value="<?=$totalCart?>">
                                    <input type="hidden" name="subTotal" value="<?=$subTotal?>">
                                    <input type="hidden" name="giamgia" value="<?=$discount?>">
                                    <?php
                                        if(!isset($codeGift)) {
                                            $codeGift = '';
                                        }
                                    ?>
                                    <input type="hidden" name="magiamgia" value="<?=$codeGift?>">
                                    <button type="submit" name="startCheckout">Proceed to checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<script>
    $(document).ready(function() {
        $(".inc.qtybutton, .dec.qtybutton").click(function() {
            var valueQty = $(this).closest('tr').find('.cart-plus-minus-box').val();
            var valueID = $(this).closest('tr').find('.cart_id').val();
            if(valueQty <= 0) {
                $.ajax({
                    url: "controllers/xuly_cart.php",
                    method: "POST",
                    data: {
                        check: "qtybang0AutoDel",
                        valueID: valueID
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
            } else {
                $.ajax({
                    url: "controllers/xuly_cart.php",
                    method: "POST",
                    data: {
                        check: "upQTYonCart",
                        valueQty: valueQty,
                        valueID: valueID
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
            }
        }); 
    });
</script>