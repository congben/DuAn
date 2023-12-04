<?php
    include '../model/order.php';
    extract($_REQUEST);
    if(isset($updateOrder)) {
        $order = new order_lass();
        $order->updateSelect($category_function, $val_orderID);
        echo '
            <script>
                window.location.href = "../index.php?act=ql_dh";
            </script>
        ';
    }

    if(isset($check)) {
        if($check == 'acceptOrder') {
            $order = new order_lass();
            $order->updateSelect('Đã duyệt', $ID);
            echo '
                <script>
                    window.location.href = "../index.php?act=ql_dh";
                </script>
            ';
        }
    }
?>