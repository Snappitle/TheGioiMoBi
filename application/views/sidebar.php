  	<body>
		<div id="vienxam" class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div class="dropdown">
						<button style="width:245px" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu
						<span class="caret" width="100px"></span></button>
						<ul style="width:245px" class="dropdown-menu">
							<li><a id="acaocap" href="#">Sản phẩm cao cấp</a></li>
							<li><a id="atrungcap" href="#">Sản phẩm trung cấp</a></li>
							<li><a id="aphothong" href="#">Sản phẩm phổ thông</a></li>
							<li><a id="aApple" href="#">Nhà sản xuất Apple</a></li>
							<li><a id="aSamsung" href="#">Nhà sản xuất Samsung</a></li>
							<li><a id="aHTC" href="#" >Nhà sản xuất HTC</a></li>
							<li><a id="aCamera" href="#">2 Camera</a></li>
							<li><a id="aSim4G" href="#" >Sim 4G</a></li>
						</ul>
					</div>
				</div>
				<form action="/TheGioiMobi/search_controller/search" method="post">
					<div class="col-md-4" id="search"><input type="text" name="tSearch" placeholder="Bạn tìm gì..." class="form-control box-shadow" id="text"></div>
					<div class="col-md-1" id="button"><button type="button" class="btn btn-default" name="btSearch"><span class="glyphicon glyphicon-search"></span></button></div>
				</form>
				<div class="col-md-2"><a href="/TheGioiMobi/login_controller/prelogin" class="dn" name="lLogin"><img id="ava" width="30px" height="30px" src="/TheGioiMobi/img/ava.jpg"/> Đăng nhập</a></div>
				<div class="col-md-1"><a href="#" name="lcart"><img id="cart" width="30px" height="30px" src="/TheGioiMobi/img/cart.png"/></a></div>
			</div> 
			<div class="row">
				<div class="col-md-2">
					<p class="font2">Dòng sản phẩm:</p>
					<div class="checkbox">
						<input type="checkbox" name="cbIphone"><label class="font3">Iphone</label><br/>
						<input type="checkbox" name="cbSamSung"><label class="font3">Samsung</label><br/>
						<input type="checkbox" name="cbHtc"><label class="font3">HTC</label><br/>
					</div>

						<p class="font2">Giá tiền:</p>
						<div class="radio">
							<input type="radio" name="cb1_5"><label class="font3">1-5 triệu</label><br/>
							<input type="radio" name="cb5_10"><label class="font3">5-10 triệu</label><br/>
							<input type="radio" name="cb10_15"><label class="font3">10-15 triệu</label><br/>
							<input type="radio" name="cb15_20"><label class="font3">15-20 triệu</label><br/>
							<input type="radio" name="cbtren20"><label class="font3">>20</label><br/>
						</div>
						<button type="button" class="btn btn-default bt1" name="btFilter">Lọc<span class="glyphicon glyphicon-filter"></span></button>
					</div>
				</form>
				<div class="col-md-10">