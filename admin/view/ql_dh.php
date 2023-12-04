<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <h3 class="mb-0"> Xin chào, chào mừng đến với trang quản lý đơn hàng!
                <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">
                    Quản lý tất cả danh mục - thêm - sửa - xóa
                </span>
            </h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tất cả danh mục</h4>
                    <p></p>
                    <div class="table-responsive">
                        <table class="table table-striped" style="table-layout: fixed; width: 100%; text-align:center;">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">ID đơn hàng</th>
                                    <th style="width: 20%;">Tổng giá</th>
                                    <th style="width: 15%;">Thanh toán</th>
                                    <th style="width: 40%;">Ghi chú</th>
                                    <th style="width: 25%;">Trạng thái</th>
                                    <th style="width: 25%;">Người đặt</th>
                                    <th style="width: 30%;">Ngày dặt</th>
                                    <th style="width: 20%;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($results as $a) {
                                        extract($a);
                                        $fullName = $account_firstName . ' ' . $account_lastName;
                                        echo '
                                        <tr>
                                            <input type="hidden" value="'. $order_id .'" class="id_getDuoc">
                                            <td class="py-1">
                                                ORDER-'. $order_id .'
                                            </td>
                                            <td> $15</td>
                                            <td style="word-wrap: break-word;">
                                                '. $order_pay .'
                                            </td>
                                            <td>
                                                '.  $order_note  .'
                                            </td>
                                            <td>
                                                '. $order_status .'
                                            </td>
                                            <td>'. $fullName .'</td>
                                            <td>'. $time_reg .'</td>
                                            <td>
                                                <a class="text-light upOrderNow">
                                                    <button class="btn btn-warning btn-rounded btn-sm"> Cập nhật </button>
                                                </a>
                                                ';
                                                    if($order_status == 'Đang chờ duyệt') {
                                                        echo '
                                                            <br>
                                                            <a href="controllers/xuly_order.php?check=acceptOrder&ID='. $order_id .'" class="mdi text-light">
                                                                <button class="btn btn-danger btn-rounded btn-sm"> Duyệt </button>
                                                            </a>
                                                        ';
                                                    }
                                                echo '
                                            </td>
                                        </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row boxUpdateOrder">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý danh mục</h4>
                        <form class="form-group" action="controllers/xuly_order.php" method="POST" enctype="multipart/form-data">
                            <label>Chọn chức năng</label>
                            <select class="js-example-basic-single" style="width: 100%;" name="category_function">
                                <option value="Đang xử lý">Đang xử lý</option>
                                <option value="Đang giao hàng">Đang giao hàng</option>
                                <option value="Giao thành công">Giao hàng thành công</option>
                                <option value="Giao hàng thất bại">Giao hàng thất bại</option>
                                <option value="Đã hủy">Hủy đơn</option>
                            </select>
                            <input type="hidden" name="val_orderID" id="orderIDFormUpdate">
                            <input type="submit" name="updateOrder" class="btn btn-primary mr-2" value="Thực hiện"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © ps32791
                2023<br>
                Distributed By <a href="https://www.facebook.com/nguyentany.2105" target="_blank">NguyenTanY</a>

            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://ap.poly.edu.vn/" target="_blank">FPT Polytechnic</a> from
                ap.poly.edu.vn</span>
        </div>
    </footer>
</div>

<script>
    $(".upOrderNow").on('click', function() {
        var ID = $(this).closest('tr').find(".id_getDuoc").val();
        $("#orderIDFormUpdate").val(ID);
        $(".boxUpdateOrder").css('right', '50%');
    });
</script>