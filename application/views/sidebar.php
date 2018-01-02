  	<body>
		<button onclick="topFunction()" id="scrollBtn" title="Go to top"><span class ="glyphicon glyphicon-home"></span> Lên trên</button>
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
							<li><a id="aSim4G" href="/TheGioiMobi/product_controller/search/4g" >Hỗ trợ sim 4G</a></li>
						</ul>
					</div>
				</div>
				<form method="POST">
					<div class="col-md-4" id="search"><input type="text" name="search" placeholder="Bạn tìm gì..." class="form-control box-shadow" id="text" name="btSearch"></div>
					<div class="col-md-1" id="button"><button type="submit" class="btn btn-default" name="btSearch" formaction="/TheGioiMobi/product_controller/search/"><span class="glyphicon glyphicon-search"></span></button></div>
				</form>
				<div class="col-md-1">
					<button style="width:180px; height:35px" type="button">
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
				<div class="col-md-1" style="margin-left:70px">
					<?php
					if(isset($_SESSION["admin"]))
					{
						echo "<button style=\"width:90px; height:35px\" type=\"button\"><a class=\"dn\" href=\"/TheGioiMobi/admin_controller/admin\">Quản lý</a></button>";
					}
					?>
				</div>
				<div class="col-md-1"><a href="#" name="lcart"><img id="cart" width="30px" height="30px" src="/TheGioiMobi/img/cart.png"/></a></div>
			</div> 
			<div class="row">
				<form method="POST">
					<div class="col-md-2">
						<p class="font2">Dòng sản phẩm:</p>
						<div class="checkbox">
							<input type="checkbox" name="brand[]" value="Iphone"><label class="font3">Iphone</label><br/>
							<input type="checkbox" name="brand[]" value="Samsung"><label class="font3">Samsung</label><br/>
							<input type="checkbox" name="brand[]" value="HTC"><label class="font3">HTC</label><br/>
						</div>

						<p class="font2">Giá tiền:</p>
						<div class="radio">
							<input type="radio" name="price" value="5"><label class="font3">1-5 triệu</label><br/>
							<input type="radio" name="price" value="10"><label class="font3">5-10 triệu</label><br/>
							<input type="radio" name="price" value="15"><label class="font3">10-15 triệu</label><br/>
							<input type="radio" name="price" value="20"><label class="font3">15-20 triệu</label><br/>
							<input type="radio" name="price" value="21"><label class="font3">>20</label><br/>
						</div>
						<button type="submit" class="btn btn-default bt1" formaction="/TheGioiMobi/product_controller/filter" name="btFilter">Lọc<span class="glyphicon glyphicon-filter"></span></button>
					</div>
				</form>
				<div class="col-md-10">