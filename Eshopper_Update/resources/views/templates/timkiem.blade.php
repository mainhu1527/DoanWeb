<!DOCTYPE html>
<html lang="en">
<head>
 <head>
<title> Home Shoppe </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<script src="js/jquery.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<body>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
		            <div class="input-group" id="adv-search">
		                <input type="text" class="form-control" placeholder="Xổ menu xuống để tìm kiếm nâng cao" readonly/>
		                <div class="input-group-btn">
		                    <div class="btn-group" role="group">
		                        <div class="dropdown dropdown-lg">
		                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
		                            <div class="dropdown-menu dropdown-menu-right" role="menu">
		                                <form class="form-horizontal" role="form">
		                                  <div class="form-group">
		                                    <label for="contain">Tìm kiếm</label>
		                                    <input class="form-control" type="text" name="usr"/>
		                                  </div>
		                                  <div class="form-group">
		                                    <label for="contain">Giá tiền thấp hơn</label>
		                                    <input class="form-control" type="text" name="pri"/>
		                                  </div>	
		                                  <div class="form-group">
		                                    <label for="filter">Danh mục</label>
		                                    <select class="form-control" name="menu">
		                                        <option value="0">Xin chọn danh mục</option>
												<?php
													foreach ($allcategory as $category ) {
														{
															echo"<option value='$category->MaDanhMuc'>$category->TenDanhMuc</option>";
														}
													}
												?>
		                                    </select>
		                                  </div>
		                                  <div class="form-group">
		                                    <label for="filter">Quốc gia</label>
		                                    <select class="form-control" name="nat">
		                                        <option value="0">Xin chọn Thương hiệu</option>
												<?php
													foreach ($allnation as $nation ) {
														{
															echo"<option value='$nation->ThuongHieu'>$nation->Tenthuonghieu</option>";
														}
													}
												?>
		                                    </select>
		                                  </div>
		                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		                                </form>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		          </div>
		        </div>
			</div>
		</div>
	<div class="container">			
	    @include("composers.CategorySearch")
	</div>
</body>