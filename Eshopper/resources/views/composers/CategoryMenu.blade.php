<?php
	foreach($allcategory as $category)
	{
		echo"<li><a href='product--{$category->MaDanhMuc}'>$category->TenDanhMuc</a></li>";
	}
?>