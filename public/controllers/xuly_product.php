<?php
    if(session_status() == PHP_SESSION_NONE) { //Kiểm tra session đã được mở chưa, nếu chưa thì khởi tạo session để sử dụng session
        session_start();
    }
    if (file_exists('../model/product.php')) {
        require "../model/product.php";
    }
    extract($_REQUEST);

    if(isset($check)) {
        if($check == 'fillShop') {
            $product = new product_lass();
            $results = $product->show_product_fill($value, $start);
            $i = 0;
            $show_results = '<div class="row">';
            foreach ($results as $items) {
                if ($i == 12) {
                    break;
                }
                $i++;
                extract($items);
                if ($product_del == 0.00) {
                    $giamgia = 0;
                } else {
                    $giamgia = (($product_price - $product_del) / $product_price) * 100;
                }
                $dateNow = date("Y-m-d");
                $giamgia = intval($giamgia);
                $image = explode(',', $image_files);
                $show_results .= '
                                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="?op=detail_pro">
                                                    <img src="' . $image[0] . '" alt="Li"s Product Image">
                                                </a>
                                                ';
                if ($dateNow == $time_reg) {
                    $show_results .= '<span class="sticker">New</span>';
                }
                $show_results .= '
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="?op=detail_pro">' . $category_name . '</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="?op=detail_pro">' . $product_name . '</a></h4>
                                                    <div class="price-box">
                                                        ';
                if ($giamgia == 0) {
                    $show_results .= '<span class="new-price">$' . $product_price . '</span>';
                } else {
                    $show_results .= '
                                                                <span class="new-price new-price-2">$' . $product_del . '</span>
                                                                <span class="old-price">$' . $product_price . '</span>
                                                                <span class="discount-percentage">-' . $giamgia . '%</span>
                                                            ';
                }
                $show_results .= '
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                ';
            }
            $show_results .= '</div>';
            echo $show_results;
        }
    }
?>