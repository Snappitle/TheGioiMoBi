<!DOCTYPE html>
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
		<div  id="vienxam" class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4" id="search"><input type="text" name="tSearch" placeholder="Bạn tìm gì..." class="form-control box-shadow" id="text" name="btSearch"></div>
				<div class="col-md-2" id="button"><button type="button" class="btn btn-default" name="btSearch"><span class="glyphicon glyphicon-search"></span></button></div>
				<div class="col-md-2"><a href="#" class="dn" name="lLogin"><img id="ava" width="30px" height="30px" src="/TheGioiMobi/img/ava.jpg"/> Đăng nhập</a></div>
				<div class="col-md-1"><a href="#" name="lcart"><img id="cart" width="30px" height="30px" src="/TheGioiMobi/img/cart.png"/></a></div>
			</div> 

			<div class="row">
				<div class="col-md-2">	
					<p class="font1">=>Tìm theo tiêu chí:</p>
					<p class="font2">Dòng sản phẩm:</p>
					<div class="checkbox">
						<input type="checkbox" name="cbIphone"><label class="font3">Iphone</label><br/>
						<input type="checkbox" name="cbSamSung"><label class="font3">Samsung</label><br/>
						<input type="checkbox" name="cbHtc"><label class="font3">HTC</label><br/>
					</div>

					<p class="font2">Giá tiền:</p>
					<div class="radio">
						<input type="radio" name="cb1_5"><label class="font3">1-5 triệuu</label><br/>
						<input type="radio" name="cb5_10"><label class="font3">5-10 triệuu</label><br/>
						<input type="radio" name="cb10_15"><label class="font3">10-15 triệu</label><br/>
						<input type="radio" name="cb15_20"><label class="font3">15-20 triệu</label><br/>
						<input type="radio" name="cbtren20"><label class="font3">>20</label><br/>
					</div>
					<button type="button" class="btn btn-default bt1" name="btFilter">Lọc<span class="glyphicon glyphicon-filter"></span></button>
				</div>
				<div class="col-md-9">
					<div class="row" id="vienda"><p class="font4"><span class="glyphicon glyphicon-star">Top 10 sản phẩm bán chạy nhất:</span></p></div>
				</div>					
			</div>	
		</div>	
	 </body>
</html>