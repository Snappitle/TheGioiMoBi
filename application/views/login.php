<?php session_start(); ?>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Thế giới mobi V2V</title>
		
		<!-- Bootstrap -->
		<link href="/TheGioiMobi/css/bootstrap.min.css" rel="stylesheet">
		<link href="/TheGioiMobi/style.css" rel="stylesheet">      
	</head>
	<body>
		<?php 
			if(isset($_SESSION["userid"]))
			{
				echo "<div style=\"text-align:center\"><a href=\"logout.php\"<p id=\"header\">Xin chào ".$_SESSION["userid"]."</p></a>";
				echo "<form action=\"profile.php\" method=\"post\">
				<input align=\"center\" type=\"submit\" name=\"profile\" value=\"Cập nhật tên\"></form>";
				echo "<form action=\"change-password.php\" method=\"post\">
				<input align=\"center\" type=\"submit\" name=\"changepass\" value=\"Đổi mật khẩu\"></form></div>";
				return;
			}
		?>
        <div class="container-fluid" id="vienxam">
            <div class="row" id="khung2">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="vienxam">
					<form action="login.php" method="post">
						<p class="font8">Đăng nhập</p>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-3" id="font9"><lable>Kí danh: </lable></div>
							<div class="col-md-7" id="login"><input type="text" name="email" class="form-control box-shadow"/></div>
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
						<div class="row">
							<div class="col-md-1"></div>
							<a id="dangki" href="#"class="font1 font11">=> Đăng kí.</a>
						</div>
					</form>
                </div>
            </div>
        </div>
	</body>
</html>