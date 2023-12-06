
            <!-- Header Area End Here -->
            <!-- Begin Slider With Banner Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-8 col-md-8">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left  animation-style-01 bg-1">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale  <span>-20% Off</span> cuối tuần </h5>
                                            <h2>áo đá bóng | S9+</h2>
                                            <h3>giá chỉ từ  <span>$12</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="?op=shop&page=1&start=0">mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-2">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                        <h5>Sale  <span>-20% Off</span> cuối tuần </h5>
                                            <h2>áo đá bóng | S9+</h2>
                                            <h3>giá chỉ từ  <span>$12</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="?op=shop&page=1&start=0">mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-3">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                        <h5>Sale  <span>-20% Off</span> cuối tuần </h5>
                                            <h2>áo đá bóng | S9+</h2>
                                            <h3>giá chỉ từ  <span>$12</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="?op=shop&page=1&start=0">mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="view/images/banner/1_1.jpg" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                                <a href="#">
                                    <img src="view/images/banner/1_2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>sản phẩm mới</span></a></li>
                                   <li><a data-toggle="tab" href="#li-bestseller-product"><span>sản phẩm giảm giá</span></a></li>
                                   <li><a data-toggle="tab" href="#li-featured-product"><span>sản phẩm đặc biệt</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $i = 0;
                                        $tienProduct = 0;
                                        foreach($show_new as $items) {
                                            if($i == 6) {
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
                                            echo '
                                                <div class="col-lg-12">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                            </a>
                                                            ';
                                                            if($dateNow == $time_reg) {
                                                                echo '<span class="sticker">New</span>';
                                                            }
                                                            echo '
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                <div class="price-box">
                                                                    '; 
                                                                    if($giamgia == 0) {
                                                                        echo '<span class="new-price">$'. $product_price .'</span>';
                                                                        $tienProduct = $product_price;
                                                                    } else {
                                                                        echo '
                                                                            <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                            <span class="old-price">$'. $product_price .'</span>
                                                                            <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                        ';
                                                                        $tienProduct = $product_del;
                                                                    }
                                                                    echo '
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            ';
                                    
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $i = 0;
                                        foreach($show_best as $items) {
                                            if($i == 6) {
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
                                            echo '
                                                <div class="col-lg-12">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                            </a>
                                                            ';
                                                            if($dateNow == $time_reg) {
                                                                echo '<span class="sticker">New</span>';
                                                            }
                                                            echo '
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                <div class="price-box">
                                                                    '; 
                                                                    if($giamgia == 0) {
                                                                        echo '<span class="new-price">$'. $product_price .'</span>';
                                                                    } else {
                                                                        echo '
                                                                            <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                            <span class="old-price">$'. $product_price .'</span>
                                                                            <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                        ';
                                                                    }
                                                                    echo '
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="li-featured-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $i = 0;
                                        foreach($show_hot as $items) {
                                            if($i == 6) {
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
                                            echo '
                                                <div class="col-lg-12">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                            </a>
                                                            ';
                                                            if($dateNow == $time_reg) {
                                                                echo '<span class="sticker">New</span>';
                                                            }
                                                            echo '
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                <div class="price-box">
                                                                    '; 
                                                                    if($giamgia == 0) {
                                                                        echo '<span class="new-price">$'. $product_price .'</span>';
                                                                    } else {
                                                                        echo '
                                                                            <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                            <span class="old-price">$'. $product_price .'</span>
                                                                            <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                        ';
                                                                    }
                                                                    echo '
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="view/images/banner/1_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="view/images/banner/1_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="view/images/banner/1_5.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="">Prime Video</a></li>
                                    <li><a href="">Computers</a></li>
                                    <li><a href="">Electronics</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $i = 0;
                                        foreach($show_new as $items) {
                                            extract($items);
                                            if($category_name == 'Laptop') {
                                                if($i == 6) {
                                                    break;
                                                }
                                                $i++;
                                                if ($product_del == 0.00) {
                                                    $giamgia = 0;
                                                } else {
                                                    $giamgia = (($product_price - $product_del) / $product_price) * 100;
                                                }
                                                $dateNow = date("Y-m-d");
                                                $giamgia = intval($giamgia);
                                                $image = explode(',', $image_files);
                                                echo '
                                                    <div class="col-lg-12">
                                                        <!-- single-product-wrap start -->
                                                        <div class="single-product-wrap">
                                                            <div class="product-image">
                                                                <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                    <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                                </a>
                                                                ';
                                                                if($dateNow == $time_reg) {
                                                                    echo '<span class="sticker">New</span>';
                                                                }
                                                                echo '
                                                            </div>
                                                            <div class="product_desc">
                                                                <div class="product_desc_info">
                                                                    <div class="product-review">
                                                                        <h5 class="manufacturer">
                                                                            <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                    <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                    <div class="price-box">
                                                                        '; 
                                                                        if($giamgia == 0) {
                                                                            echo '<span class="new-price">$'. $product_price .'</span>';
                                                                        } else {
                                                                            echo '
                                                                                <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                                <span class="old-price">$'. $product_price .'</span>
                                                                                <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                            ';
                                                                        }
                                                                        echo '
                                                                    </div>
                                                                </div>
                                                                <div class="add-actions">
                                                                    <ul class="add-actions-link">
                                                                        <li class="add-cart active" id="addToCartFix">
                                                                            <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                                <input type="hidden" name="id" value="'. $product_id .'">
                                                                                <input type="hidden" name="name" value="'. $product_name .'">
                                                                                <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                                <input type="hidden" name="qty" value="1">
                                                                                <input type="hidden" name="img" value="'. $image[0] .'">
                                                                                <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                            </form>
                                                                        </li>
                                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- single-product-wrap end -->
                                                    </div>
                                                ';
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>TV & Audio</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="">Chamcham</a></li>
                                    <li><a href="">Sanai</a></li>
                                    <li><a href="">Meito</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $i = 0;
                                        foreach($show_new as $items) {
                                            extract($items);
                                            if($category_name == 'TV' || $category_name == 'Radio') {
                                                if($i == 6) {
                                                    break;
                                                }
                                                $i++;
                                                if ($product_del == 0.00) {
                                                    $giamgia = 0;
                                                } else {
                                                    $giamgia = (($product_price - $product_del) / $product_price) * 100;
                                                }
                                                $dateNow = date("Y-m-d");
                                                $giamgia = intval($giamgia);
                                                $image = explode(',', $image_files);
                                                echo '
                                                    <div class="col-lg-12">
                                                        <!-- single-product-wrap start -->
                                                        <div class="single-product-wrap">
                                                            <div class="product-image">
                                                                <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                    <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                                </a>
                                                                ';
                                                                if($dateNow == $time_reg) {
                                                                    echo '<span class="sticker">New</span>';
                                                                }
                                                                echo '
                                                            </div>
                                                            <div class="product_desc">
                                                                <div class="product_desc_info">
                                                                    <div class="product-review">
                                                                        <h5 class="manufacturer">
                                                                            <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                    <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                    <div class="price-box">
                                                                        '; 
                                                                        if($giamgia == 0) {
                                                                            echo '<span class="new-price">$'. $product_price .'</span>';
                                                                        } else {
                                                                            echo '
                                                                                <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                                <span class="old-price">$'. $product_price .'</span>
                                                                                <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                            ';
                                                                        }
                                                                        echo '
                                                                    </div>
                                                                </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <!-- single-product-wrap end -->
                                                    </div>
                                                ';
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class="li-static-home-image"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                            <div class="li-static-home-content">
                                <p>Sale <span>-20% Off</span>Trong Tuần </p>
                                <h2>quả bóng hot 2023</h2>
                                <h2>được sản xuất từ </h2>
                                <h2> đất nước số một thế giới</h2>
                                <p class="schedule">
                                    giá bắt đầu chỉ từ 
                                    <span> $1209.00</span>
                                </p>
                                <div class="default-btn">
                                    <a href="" class="links">mua ngay</a>
                                </div>
                            </div>
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->
            <section class="product-area li-trending-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab li-trending-product-tab">
                                <h2>
                                    <span>Trending Products</span>
                                </h2>
                                <ul class="nav li-product-menu li-trending-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#home1"><span>Laptop</span></a></li>
                                   <li><a data-toggle="tab" href="#home2"><span>TV</span></a></li>
                                   <li><a data-toggle="tab" href="#home3"><span>Radio</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <?php
                                                $i = 0;
                                                foreach($show_hot as $items) {
                                                    extract($items);
                                                    if($category_name == 'Laptop') {
                                                        if($i == 6) {
                                                            break;
                                                        }
                                                        $i++;
                                                        if ($product_del == 0.00) {
                                                            $giamgia = 0;
                                                        } else {
                                                            $giamgia = (($product_price - $product_del) / $product_price) * 100;
                                                        }
                                                        $dateNow = date("Y-m-d");
                                                        $giamgia = intval($giamgia);
                                                        $image = explode(',', $image_files);
                                                        echo '
                                                            <div class="col-lg-12">
                                                                <!-- single-product-wrap start -->
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                            <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                                        </a>
                                                                        ';
                                                                        if($dateNow == $time_reg) {
                                                                            echo '<span class="sticker">New</span>';
                                                                        }
                                                                        echo '
                                                                    </div>
                                                                    <div class="product_desc">
                                                                        <div class="product_desc_info">
                                                                            <div class="product-review">
                                                                                <h5 class="manufacturer">
                                                                                    <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                            <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                            <div class="price-box">
                                                                                '; 
                                                                                if($giamgia == 0) {
                                                                                    echo '<span class="new-price">$'. $product_price .'</span>';
                                                                                } else {
                                                                                    echo '
                                                                                        <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                                        <span class="old-price">$'. $product_price .'</span>
                                                                                        <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                                    ';
                                                                                }
                                                                                echo '
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-actions">
                                                                            <ul class="add-actions-link">
                                                                                <li class="add-cart active" id="addToCartFix">
                                                                                    <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                                        <input type="hidden" name="id" value="'. $product_id .'">
                                                                                        <input type="hidden" name="name" value="'. $product_name .'">
                                                                                        <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                                        <input type="hidden" name="qty" value="1">
                                                                                        <input type="hidden" name="img" value="'. $image[0] .'">
                                                                                        <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                                    </form>
                                                                                </li>
                                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- single-product-wrap end -->
                                                            </div>
                                                        ';
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="home2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <?php
                                                $i = 0;
                                                foreach($show_hot as $items) {
                                                    extract($items);
                                                    if($category_name == 'TV') {
                                                        if($i == 6) {
                                                            break;
                                                        }
                                                        $i++;
                                                        if ($product_del == 0.00) {
                                                            $giamgia = 0;
                                                        } else {
                                                            $giamgia = (($product_price - $product_del) / $product_price) * 100;
                                                        }
                                                        $dateNow = date("Y-m-d");
                                                        $giamgia = intval($giamgia);
                                                        $image = explode(',', $image_files);
                                                        echo '
                                                            <div class="col-lg-12">
                                                                <!-- single-product-wrap start -->
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                            <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                                        </a>
                                                                        ';
                                                                        if($dateNow == $time_reg) {
                                                                            echo '<span class="sticker">New</span>';
                                                                        }
                                                                        echo '
                                                                    </div>
                                                                    <div class="product_desc">
                                                                        <div class="product_desc_info">
                                                                            <div class="product-review">
                                                                                <h5 class="manufacturer">
                                                                                    <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                            <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                            <div class="price-box">
                                                                                '; 
                                                                                if($giamgia == 0) {
                                                                                    echo '<span class="new-price">$'. $product_price .'</span>';
                                                                                } else {
                                                                                    echo '
                                                                                        <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                                        <span class="old-price">$'. $product_price .'</span>
                                                                                        <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                                    ';
                                                                                }
                                                                                echo '
                                                                            </div>
                                                                        </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <!-- single-product-wrap end -->
                                                            </div>
                                                        ';
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="home3" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <?php
                                                $i = 0;
                                                foreach($show_hot as $items) {
                                                    extract($items);
                                                    if($category_name == 'Radio') {
                                                        if($i == 6) {
                                                            break;
                                                        }
                                                        $i++;
                                                        if ($product_del == 0.00) {
                                                            $giamgia = 0;
                                                        } else {
                                                            $giamgia = (($product_price - $product_del) / $product_price) * 100;
                                                        }
                                                        $dateNow = date("Y-m-d");
                                                        $giamgia = intval($giamgia);
                                                        $image = explode(',', $image_files);
                                                        echo '
                                                            <div class="col-lg-12">
                                                                <!-- single-product-wrap start -->
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                            <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                                        </a>
                                                                        ';
                                                                        if($dateNow == $time_reg) {
                                                                            echo '<span class="sticker">New</span>';
                                                                        }
                                                                        echo '
                                                                    </div>
                                                                    <div class="product_desc">
                                                                        <div class="product_desc_info">
                                                                            <div class="product-review">
                                                                                <h5 class="manufacturer">
                                                                                    <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                            <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                            <div class="price-box">
                                                                                '; 
                                                                                if($giamgia == 0) {
                                                                                    echo '<span class="new-price">$'. $product_price .'</span>';
                                                                                } else {
                                                                                    echo '
                                                                                        <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                                        <span class="old-price">$'. $product_price .'</span>
                                                                                        <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                                    ';
                                                                                }
                                                                                echo '
                                                                            </div>
                                                                        </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <!-- single-product-wrap end -->
                                                            </div>
                                                        ';
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trending Product Area End Here -->
            <!-- Begin Li's Trendding Products Area -->
            <section class="product-area li-laptop-product li-trendding-products best-sellers pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Bestsellers</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $i = 0;
                                        foreach($show_best as $items) {
                                            if($i == 6) {
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
                                            echo '
                                                <div class="col-lg-12">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">
                                                                <img src="'. $image[0] .'" alt="Li"s Product Image">
                                                            </a>
                                                            ';
                                                            if($dateNow == $time_reg) {
                                                                echo '<span class="sticker">New</span>';
                                                            }
                                                            echo '
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $category_name .'</a>
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
                                                                <h4><a class="product_name" href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'">'. $product_name .'</a></h4>
                                                                <div class="price-box">
                                                                    '; 
                                                                    if($giamgia == 0) {
                                                                        echo '<span class="new-price">$'. $product_price .'</span>';
                                                                    } else {
                                                                        echo '
                                                                            <span class="new-price new-price-2">$'. $product_del .'</span>
                                                                            <span class="old-price">$'. $product_price .'</span>
                                                                            <span class="discount-percentage">-'. $giamgia .'%</span>
                                                                        ';
                                                                    }
                                                                    echo '
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" id="addToCartFix">
                                                                        <form action="controllers/xuly_cart.php" method="POST" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id" value="'. $product_id .'">
                                                                            <input type="hidden" name="name" value="'. $product_name .'">
                                                                            <input type="hidden" name="price" value="'. $tienProduct .'">
                                                                            <input type="hidden" name="qty" value="1">
                                                                            <input type="hidden" name="img" value="'. $image[0] .'">
                                                                            <button class="add-to-cart" name="addToCartDetail" type="submit">Add to cart</button>
                                                                        </form>
                                                                    </li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="?op=detail_pro&product_id='. $product_id .'&category_id='. $category_id .'" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->