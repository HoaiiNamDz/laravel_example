<div class="wrapper">
    <div class="row">
        <div class="col-lg-3">
            <select name="" id="" class="form-control">
                <option value="20" selected>20 bản ghi</option>
                <option value="10">10 bản ghi</option>
                <option value="5">5 bản ghi</option>
            </select>
        </div>
        <div class="col-lg-3">
            <select name="" id="" class="form-control">
                <option value="0" selected>Chọn nhóm thành viên</option>
                <option value="1">Quản trị viên</option>
            </select>
        </div>
        <div class="col-lg-3">
            <input type="text" placeholder="Nhập từ khóa muốn tìm" class="form-control">
            <button type="submit" class="btn">Tìm kiếm</button>
        </div>
        <div class="col-lg-3">
            <a href="{{ route('user.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i>Thêm mới thành viên</a>
        </div>
    </div>
</div>