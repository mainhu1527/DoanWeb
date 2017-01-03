<?php
	$query=" ";
	if(isset($_GET['usr'])) 
	{
		$id = $_GET['usr'];
		if($id=="Check 123")
		{
			echo"Vui lòng nhập thông tin";
		}
		else
		{
			if(isset($_GET['usr'])) 
			{
				$id = $_GET['usr'];
				if( $id=="Tim kiem" or$id=="")
				{   	   
					$query="select * from sanpham,danhmuc where  sanpham.MaDanhMuc=danhmuc.MaDanhMuc ";
					$query1="select DISTINCT danhmuc.MaDanhMuc,danhmuc.TenDanhMuc  from sanpham,danhmuc where  sanpham.MaDanhMuc=danhmuc.MaDanhMuc "; 
				}
				else 
				{
		  	    	$query="select * from sanpham,danhmuc where  sanpham.MaDanhMuc=danhmuc.MaDanhMuc and sanpham.Ten LIKE '%$id%'";
		  	    	$query1="select DISTINCT danhmuc.MaDanhMuc,danhmuc.TenDanhMuc from sanpham,danhmuc where  sanpham.MaDanhMuc=danhmuc.MaDanhMuc and sanpham.Ten LIKE '%$id%'";
				}
			} 
			if(isset($_GET['pri'])) 
			{
				$pri=$_GET['pri'];
				if($pri<>0)
				{

						$query=$query . " and sanpham.Gia < $pri ";
						$query1=$query1 . " and sanpham.Gia < $pri ";
				}
			}
			if(isset($_GET['menu'])) 
			{
				$mn=$_GET['menu'];
				if($mn<>'0')
				{
						$query=$query . "  and danhmuc.MaDanhMuc LIKE '%$mn%'";
						$query1=$query1 . " and danhmuc.MaDanhMuc LIKE '%$mn%'";
				}
			}
			if(isset($_GET['nat'])) 
			{
				$na=$_GET['nat'];
				if($na<>'0')
				{

						$query=$query . "  and sanpham.ThuongHieu LIKE '%$na%'";
						$query1=$query1 . " and sanpham.ThuongHieu LIKE '%$na%'";
				}
			}
			$allproduct = DB::select($query);
			$s=0;
			$allcategory=DB::select($query1);
			if(count($allcategory)==0) echo"Không có sản phẩm phù hợp";
			foreach ($allcategory as $category ) 
			{
				$s=0;

				echo"<div class='content_top'>";
			    echo"	<div class='heading'>";
			    echo"	<h3>$category->TenDanhMuc</h3>";
			    echo"	</div>";
			    echo"	<div class='see'>";
			    echo"		<p><a href='product--{$category->MaDanhMuc}'>Xem toàn bộ sản phẩm</a></p>";
			    echo"	</div>";
			    echo"	<div class='clear'></div>";
			    
				foreach ($allproduct as $product ) 
				{
					if($product->MaDanhMuc==$category->MaDanhMuc)
					{
						$s=$s+1;
				    	if ($s%4==1)
				     	{
				     		echo" <div class='section group'>";
				     	}
						echo"<div class='grid_1_of_4 images_1_of_4'>";
						$images = DB::table('hinhanh')->where('MaSanPham', $product->MaSanPham)->pluck('HinhAnh');
						echo" <a href='preview--{$product->MaSanPham}'><img src=$images[0] alt=''/></a>";
						echo" <h2>$product->Ten</h2>";
						echo"<div class='price-details'>";
						echo"<div class='price-number'>";
						echo"<p><span class='rupees'>$product->Gia VND</span></p>";
						echo"</div>";
						echo"<div class='add-cart'>";			
						echo"<h4><a href=''>Thêm vào giỏ</a></h4>";
						echo"</div>";
						echo"<div class='clear'></div>";
						echo"</div>";
						if ($s%4==0)
						{
							echo"</div>";
							break;
						}
						echo"</div>";
					}
				}
			 	echo"</div>";
			}
				}
			}
			
?>