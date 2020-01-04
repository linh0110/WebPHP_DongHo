<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>    
 <title>PDO - Tạo một bản ghi - </title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />       
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
 include("ketnoi.php");
 if(isset($_GET['id']))
 $id=$_GET['id'];
 $sql="select*from hanghoa, chitiethanghoa where hanghoa.id_hang=chitiethanghoa.id_hang and hanghoa.id_hang='$id'";
 $HH=$conn->query($sql);
 ?>
 <body>         <!-- container -->   
	 <div class="container">     
      <div class="page-header">          
      <h1 align="center"> Chi tiết hàng hóa</h1>
 <form action="chitiethangql.php" method="post">
 <table class='table table-hover table-responsive table-bordered'> 
 <?php foreach($HH as $ct) ?>
 <tr>
 <td>Tên sản phẩm</td>
 <td><input type='text' name='name' class='form-control' value="<?php echo $ct['TenHang'] ?>" /></td>
 </tr>
 <tr>
 <td>Hình ảnh</td>
 <td><img src="image/<?php echo $ct['HinhAnh'] ?>" width="100" height="150" /></td>
 </tr>
 <tr>
 <td>Kiểu dáng</td>
 <td><input type='text' name='name' class='form-control' value="<?php echo $ct['KieuDang'] ?>" /></td>
 </tr>
 <tr>
 <td>Năng lượng</td>
 <td><input type='text' name='price' class='form-control' value="<?php echo $ct['NangLuong'] ?>" /></td>
 </tr>
 <tr>
 <td>Độ chịu nước</td>
 <td><input type='text' name='name' class='form-control' value="<?php echo $ct['DoChiuNuoc'] ?>" /></td>
 </tr>
 <tr>
 <td>Chất liệu mặt</td>
 <td><input type='text' name='name' class='form-control' value="<?php echo $ct['ChatLieuMat'] ?>" /></td>
 </tr>
 <tr>
 <td>Đường kính mặt</td>
 <td><input type='text' name='name' class='form-control' value="<?php echo $ct['DuongKinhMat'] ?>" /></td>
 </tr>
 <tr>
 <td>Mô tả</td>
 <td><textarea name='description' class='form-control'><?php echo $ct['MoTa'] ?></textarea></td>
 </tr>
 <tr>
 <td></td>
 <td><input type='submit' value='Sửa' class='btn btn-primary' />
 <input type='submit' value='Xóa' class='btn btn-primary' />
 <a href='quanly.php?xem=qlhanghoa' class='btn btn-danger'>Quay lại danh sách sản phẩm</a></td>
 </tr>
 </table> 
 </form> 
 </body>
 </head>