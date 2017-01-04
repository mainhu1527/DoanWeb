<?php
	$s=0;
	$cost=0;
	foreach ($allcategory as $category ) 
	{
		$s=0;
		echo"<div class='content_top'>";
	    echo"	<div class='heading'>";
	    echo"<hr></hr>";
	    echo"	<p><h3>$category->TenDanhMuc</h3></p>";
	    echo"	</div>";
	    echo"	<div class='clear'></div>";
	    $allproduct = DB::select('select * from sanpham where MaDanhMuc=?',array($category->MaDanhMuc));
		foreach ($allproduct as $product ) 
		{
			echo"<div class='grid_1_of_4 images_1_of_4'>";
			$images = DB::table('hinhanh')->where('MaSanPham', $product->MaSanPham)->pluck('HinhAnh');
			echo" <a href='preview--{$product->MaSanPham}'><img src=$images[0] alt=''/></a>";
			echo" <h2>$product->Ten</h2>";
			echo"<div class='price-details'>";
			echo"<div class='price-number'>";
			$cost="$product->Gia";
			echo"<div class'rupees'>";
			echo number_format($cost).' VNĐ<br>';
			echo"</div>";
			echo"</div>";
			echo"<div class='add-cart'>";			
			echo"<h4><a href=''>Thêm vào giỏ</a></h4>";
			echo"</div>";
			echo"<div class='clear'></div>";
			echo"</div>";
			echo"</div>";
			$s=$s+1;
		}
	 	echo"</div>";
	 	echo"	<div class='heading'>";
	    echo"<hr></hr>";
	}
	echo"<div class='padding-bottom'>";
?>