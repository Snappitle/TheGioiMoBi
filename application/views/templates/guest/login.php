	<body>
		<?php 
			if(isset($_SESSION["userid"]))
			{
				echo "<div style=\"text-align:center\"><a href=\"logout.php\"<p id=\"header\">Xin chào ".$_SESSION["userid"]."</p></a>";
			}
		?>
        <div class="container-fluid" id="vienxam">
            <div class="row" id="khung2">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="vienxam">
					<form action="/TheGioiMobi/login_controller/login" method="post">
						<p class="font8">Đăng nhập</p>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3" id="font9"><lable>Kí danh: </lable></div>
							<div class="col-md-7" id="login"><input type="text" name="username" class="form-control box-shadow"/></div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3" id="font10"><lable>Mật khẩu: </lable></div>
							<div class="col-md-7" id="login"><input type="password" name="password" class="form-control box-shadow"/></div>
						</div>
						<div class="row">
							<div class="col-md-8"></div>
							<input type="submit" name="login" value="Đăng nhập" class="btn btn-default bt2">
						</div>
						</form>
						<div class="row">
							<div class="col-md-1"></div>
							<a id="dangki" href="/TheGioiMobi/signup_controller/signup"class="font1 font11">=> Đăng kí.</a>
						</div>
