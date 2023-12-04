<?php
if(isset($_REQUEST['act'])){
    $act = $_REQUEST['act'];
    switch($act){
        case 'admin':
            include "./../view/header.php";
            include "./../View/footer.php";
            break;
        default:
            include("./../View/header.php");
            include("./../View/home.php");
            break;
        }
} else {
        include "./../view/header.php";
        include "./../view/home.php";
        include "./../View/footer.php";
        }





?>