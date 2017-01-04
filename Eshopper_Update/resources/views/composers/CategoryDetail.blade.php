
    	<?php
    		foreach ($products as $product ) {
    			$menus =DB::table('danhmuc')->where('MaDanhMuc',$product->MaDanhMuc)->pluck('TenDanhMuc');
	    			echo"<p><a href='index'>Trang chủ</a> > <a href='product--{$product->MaDanhMuc}''>$menus[0]</a></p>";
    		} 		
    	?>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="row">	
    		<div class = "col-md-6">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">

								<div class="slides_container">
								 <?php
							   		foreach ($products as $product ) {
    									$images = DB::table('hinhanh')->where('MaSanPham', $product->MaSanPham)->pluck('HinhAnh');	
										echo"<a href='#' target='_blank'><img src='$images[0]' width='300' height='300' alt='' /></a>";	
									}
								?></div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
					 <?php
						foreach ($products as $product ) {
							echo"<h2>$product->Ten </h2>";
							echo"<p>Chất liệu: $product->ChatLieu </p>";
							echo"<p>Kiểu dáng: $product->ThongTin </p>";					
						}
					?>
					<div class="price">
					 <?php
					 	$cost=0;
						foreach ($products as $product ) {
							$cost="$product->Gia";
							echo"<p>Giá: <span>";
							echo number_format($cost).' VNĐ<br>';				
						}
					?>
						
					</div>
					<div class="available">
						<p>Lựa chọn :</p>
					<ul>
						<li>Màu:
							<select>
							<option>Trắng</option>
							<option>Đỏ</option>
							<option>Hồng</option>
							<option>Đen</option>
						</select></li>
						<li>Size:<select>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
							<option>XXL</option>
						</select></li>
					</ul>
					</div>
				<div class="share-desc">
					<div class="button"><span><a href="#">Thêm vào giỏ</a></span></div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
			</div>
	<div class="container">
		@include('composers.CategoryProduct')
	</div>