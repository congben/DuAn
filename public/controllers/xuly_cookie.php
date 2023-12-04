<?php
    if(isset($_SESSION['saveLog'])) { //Kiểm tra xem khi đăng nhập có tích vào ghi nhớ đăng nhập không
        include 'model/account.php';
        $account = new acc_lass();
        $account->updateStatus(1);
        setcookie('saveLog', $_SESSION['x_user']['account_id'], time() + (86400 * 7));
        unset($_SESSION['saveLog']);
        header('location: index.php');
    }

    if(isset($check)) {
        if($check == 'out') { //Đăng xuất bằng 
            include 'model/account.php';
            $account = new acc_lass();
            $account->updateStatus(0);
            unset($_SESSION['x_user']);
            setcookie('saveLog', false, time() - 8600);
            header('location: index.php');
        }
    }
?>