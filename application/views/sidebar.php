  	<body>
		<div id="vienxam" class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div class="dropdown">
						<button style="width:245px" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu
						<span class="caret" width="100px"></span></button>
						<ul style="width:245px" class="dropdown-menu">
							<li><a id="acaocap" href="/TheGioiMobi/product_controller/search/cao_cap">Sản phẩm cao cấp</a></li>
							<li><a id="atrungcap" href="/TheGioiMobi/product_controller/search/trung_cap">Sản phẩm trung cấp</a></li>
							<li><a id="aphothong" href="/TheGioiMobi/product_controller/search/pho_thong">Sản phẩm phổ thông</a></li>
							<li><a id="aApple" href="/TheGioiMobi/product_controller/search/Apple">Nhà sản xuất Apple</a></li>
							<li><a id="aSamsung" href="/TheGioiMobi/product_controller/search/Samsung">Nhà sản xuất Samsung</a></li>
							<li><a id="aHTC" href="/TheGioiMobi/product_controller/search/HTC" >Nhà sản xuất HTC</a></li>
							<li><a id="aCamera" href="/TheGioiMobi/product_controller/search/2cam">2 Camera</a></li>
							<li><a id="aSim4G" href="/TheGioiMobi/product_controller/search/4g" >Sim 4G</a></li>
						</ul>
					</div>
				</div>
				<form method="POST">
					<div class="col-md-4" id="search"><input type="text" name="search" placeholder="Bạn tìm gì..." class="form-control box-shadow" id="text" name="btSearch"></div>
					<div class="col-md-1" id="button"><button type="submit" class="btn btn-default" name="btSearch" formaction="/TheGioiMobi/product_controller/search/"><span class="glyphicon glyphicon-search"></span></button></div>
				</form>
				<div class="col-md-2">
					<button style="width:180px; height:35px" type="button" >
						<?php
							if(isset($_SESSION["userid"]))
							{
								echo "<a href=\"/TheGioiMobi/login_controller/logout\" class=\"dn\" name=\"lLogin\">";
								echo "<img id=\"ava\" width=\"25px\" height=\"25px\" src=\"/TheGioiMobi/img/ava.jpg\"/>";
								echo $_SESSION["userid"]."</a>";
							}
							else 
							{
								echo "<a href=\"/TheGioiMobi/login_controller/prelogin\" class=\"dn\" name=\"lLogin\">";
								echo "<img id=\"ava\" width=\"25px\" height=\"25px\" src=\"/TheGioiMobi/img/ava.jpg\"/>";
								echo "  Đăng nhập"."</a>";
							}
						?>
					</button>
				</div>
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