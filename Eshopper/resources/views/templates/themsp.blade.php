<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
   <div class="container">
  <div class="register">
  <div class="col-lg-12">
    <?php
      if(Session::has('flash_message'))
      {
        $s=Session::get('flash_lavel');
        echo"<div class='$s'>";
        echo Session::get('flash_message') ;
        echo"</div>";
      }
    ?>
  </div>
    <h2>Thêm sản phẩm</h2>
          <form action="add" method="POST" class="  register-top-grid" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{!!csrf_token()!!}">
            <label for="usr">Tên:</label>
            <input type="text" class="form-control" name="usr">
            <label for="pwd">Giá tiền :</label>
            <input type="number" class="form-control" name="pri">
            <label for="pwd">Thông tin:</label>
            <input type="text" class="form-control" name="inf">
            <label for="pwd">Chức năng:</label>
            <input type="text" class="form-control" name="opt">
            <label for="pwd">Danh mục:</label>
            <select class="form-control" name="menu">
              <option value="0">Xin chọn danh mục</option>
              <?php
                foreach ($allcategory as $category ) {
                  {
                    echo"<option value='$category->MaDanhMuc'>$category->TenDanhMuc</option>";
                  }
                }
              ?>
            
            <select>
            <label for="pwd">Quốc Gia:</label>
              <select class="form-control" name="nat">
              <option value="0">Xin chọn Quốc Gia</option>
              <?php
                foreach ($allnation as $nation ) {
                  {
                    echo"<option value='$nation->ThuongHieu'>$nation->Tenthuonghieu</option>";
                  }
                }
              ?>
            </select> 
            <input type="file" name="img" />
            <input class="btn btn-primary" type="submit" value='Thêm sản phẩm'>
            </form>
        </div>
       </div>
</div>

</body>
</html>