@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])

<form action="" method="">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title" style="font-size: 3rem; font-weight: bold">Thông tin chung</div>
                    <div class="panel-description">Nhập thông tin chung người dùng</div>
                    <div class="panel-description">Lưu ý những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Thông tin chung</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="email">Email</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="email" 
                                            name="email" 
                                            id="email"
                                            class="form-control"
                                    >
                                </div>
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="group_user">Nhóm thành viên</label>
                                    <span class="text-danger">(*)</span>
                                    <select name="" id="group_user" class="form-control">
                                        <option value="0">[Chọn nhóm thành viên]</option>
                                        <option value="1">Quản trị viên</option>
                                    </select>
                                </div>
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="password">Mật khẩu</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="password" 
                                            name="password" 
                                            id="password"
                                            class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="name">Họ tên</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="text" 
                                            name="name" 
                                            id="name"
                                            class="form-control"
                                    >
                                </div>
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="birthday">Ngày sinh</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="date" 
                                            name="birthday" 
                                            id="birthday"
                                            class="form-control"
                                    >
                                </div>
                                <div class="form-row">
                                    <label for="repassword">Nhập lại mật khẩu</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="password" 
                                            name="repassword" 
                                            id="repassword"
                                            class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="avatar">Ảnh đại diện</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="file" 
                                            name="avatar" 
                                            id="avatar"
                                            class="form-control"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title" style="font-size: 3rem; font-weight: bold">Thông tin liên hệ</div>
                    <div class="panel-description">Nhập thông tin liên hệ người dùng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Thông tin liên hệ</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="province">Thành phố</label>
                                    <span class="text-danger">(*)</span>
                                    <select name="" id="province" class="form-control">
                                        <option value="0">[Chọn Thành Phố]</option>
                                        <option value="1">Hà Nội</option>
                                    </select>
                                </div>
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="ward">Phườnh/Xã</label>
                                    <span class="text-danger">(*)</span>
                                    <select name="" id="ward" class="form-control">
                                        <option value="0">[Chọn Phườnh/Xã]</option>
                                        <option value="1">Yên Phụ</option>
                                    </select>
                                </div>
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="phone">Số điện thoại</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="text" 
                                            name="phone" 
                                            id="phone"
                                            class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="district">Quận/Huyện</label>
                                    <span class="text-danger">(*)</span>
                                    <select name="" id="district" class="form-control">
                                        <option value="0">[Chọn Quận/Huyện]</option>
                                        <option value="1">Tây Hồ</option>
                                    </select>
                                </div>
                                <div class="form-row" style="margin-bottom: 20px">
                                    <label for="address">Địa chỉ</label>
                                    <span class="text-danger">(*)</span>
                                    <input  type="text" 
                                            name="address" 
                                            id="address"
                                            class="form-control"
                                    >
                                </div>
                                <div class="form-row">
                                    <label for="description">Ghi chú</label>
                                    <input  type="text" 
                                            name="description" 
                                            id="description"
                                            class="form-control"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button class="btn btn-success" type="submit">Lưu</button>
        </div>
    </div>
</form>