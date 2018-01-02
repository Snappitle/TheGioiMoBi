<body>
    <div class="container-fluid" id="vienxam">
        <div class="row" id="khung2">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="vienxam">
                <form action="/TheGioiMobi/signup_controller/signup" method="post">
                    <p class="font8">Đăng kí</p>
                    <div class= "row"><div class="col-md-4" id="font9">&#9733Thông tin cá nhân:</div></div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" id="font13"><lable>Họ tên: </lable></div>
                        <div class="col-md-7" id="login"><input type="text" name="name" class="form-control box-shadow"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" id="font13"><lable>Ngày sinh: </lable></div>
                        <div class="col-md-7" id="login"><input type="text" name="date" class="form-control box-shadow"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" id="font13"><lable>Bạn sống tại: </lable></div>
                        <div class="col-md-7" id="login"><input type="text" name="city" class="form-control box-shadow"/></div>
                    </div>
                    <div class= "row"><div class="col-md-4" id="font9">&#9733Thông tin tài khoản:</div></div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" id="font13"><lable>Kí danh<span style="color: red">*</span>: </lable></div>
                        <div class="col-md-7" id="login"><input type="text" name="user" class="form-control box-shadow"/></div>
                        <div class="col-md-1"> <input type="submit" name="check" value="Kiểm tra" class="btn btn-default bt2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" id="font13"><lable>Mật khẩu<span style="color: red">*</span>: </lable></div>
                        <div class="col-md-7" id="login"><input type="password" name="password" class="form-control box-shadow"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" id="font13"><lable>Nhập lại mật khẩu<span style="color: red">*</span>: </lable></div>
                        <div class="col-md-7" id="login"><input type="password" name="password2" class="form-control box-shadow"/></div>
                    </div>
                    <div class= "row"><div class="col-md-4" id="font9">&#9733Mã kiểm tra:</div></div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" id="font13"><lable>Mã kiểm tra: </lable></div>
                        <div class="col-md-7" id="login"><input type="text" name="user" class="form-control box-shadow"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" id="font13"><lable>Nhập lại mã kiểm tra<span style="color: red">*</span>: </lable></div>
                        <div class="col-md-7" id="login"><input type="text" name="checkcode" class="form-control box-shadow"/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <input type="submit" name="login" value="Đăng kí" class="btn btn-default bt5">
                    </div>
                </form>