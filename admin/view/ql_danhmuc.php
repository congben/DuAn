<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <h3 class="mb-0"> Xin chào, chào mừng đến với trang quản lý danh mục!
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
                                    <th style="width: 3%;">#</th>
                                    <th style="width: 12%;">Tên danh mục</th>
                                    <th style="width: 40%;">Mô tả</th>
                                    <th style="width: 15%;">Số lượng sản phẩm</th>
                                    <th style="width: 15%;">Ngày cập nhật</th>
                                    <th style="width: 15%;">Xóa danh mục</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        '.$i.'
                                    </td>
                                    <td> '.$loai_ten.'</td>
                                    <td style="word-wrap: break-word;">
                                        '.$loai_ten.'
                                    </td>
                                    <td>
                                        '.$string.'
                                    </td>
                                    <td>'.$ngay_reg.'</td>
                                    <td>
                                        <a href="index.php?action=catalog_management&amp;id=5" class="mdi text-light">
                                            <button class="btn btn-warning btn-rounded btn-sm"> Sửa </button>
                                        </a>
                                        <a href="index.php?action=delete_category&amp;id=5" class="mdi text-light">
                                            <button class="btn btn-danger btn-rounded btn-sm"> Xóa </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý danh mục</h4>
                        <form class="form-group" action="index.php?action=option_category" method="POST" enctype="multipart/form-data">
                            <label>Chọn chức năng</label>
                            <select class="js-example-basic-single" style="width: 45%;" name="category_function">
                                <option value="update_catalog">Cập nhật danh mục</option>
                                <option value="add_category">Thêm danh mục</option>
                            </select>
                            <input type="submit" name="option_category" class="btn btn-primary mr-2" value="Thực hiện"></input>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm danh mục</h4>
                        <form class="forms-sample" action="index.php?action=add_category" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="category_name" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả danh mục</label>
                                <textarea class="form-control" id="exampleTextarea1" name="category_description" rows="4"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary mr-2" name="add_category" value=" Thêm ">
                            <!-- <button class="btn btn-light">Trở lại</button> -->
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
                Distributed By <a href="https://www.facebook.com/thuy.thien.9003888" target="_blank">trinhphuongthuy</a>

            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://ap.poly.edu.vn/" target="_blank">FPT Polytechnic</a> from
                ap.poly.edu.vn</span>
        </div>
    </footer>
</div>