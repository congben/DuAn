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
                    <button class="btn btn-light">Trở lại</button>
                </form>
            </div>
        </div>
    </div>
</div>