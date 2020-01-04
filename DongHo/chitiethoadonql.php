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
 $sql="select * from hoadon, chitiethoadon where hoadon.id_hd=chitiethoadon.id_hd and hoadon.id_hd='$id'";
 $HD=$conn->query($sql);
 ?>
<body>
	<div class="container">     
      <div class="page-header">          
      <h1 align="center"> Chi tiết Hóa đơn </h1>
	<form action="chitiethoadonql.php" method="post">
		 <table class='table table-hover table-responsive table-bordered'> 
			 <tr style="font:bold" align="center">
				 <td>Mã nhân viên</td>
				 <td>Mã khách hàng</td>
				 <td>Mã hàng</td>
				 <td>Số lượng</td>
				 <td>Đơn giá</td>
			 </tr>
			  <?php foreach($HD as $ctiet) {?>
			 <tr>
				 <td><input type='text' name='name' class='form-control' value="<?php echo $ctiet['ID_NV'] ?>" /></td>
				 <td><input type='text' name='name' class='form-control' value="<?php echo $ctiet['ID_KH'] ?>" /></td>
				 <td><input type='text' name='name' class='form-control' value="<?php echo $ctiet['ID_Hang'] ?>" /></td>
				 <td><input type='text' name='quantity' class='form-control' value="<?php echo $ctiet['SoLuong'] ?>" /></td>
				 <td><input type='text' name='price' class='form-control' value="<?php echo $ctiet['DonGia'] ?>" /></td>
			 </tr>
			  <?php }?>
			 <tr align="center">
			   <td colspan="5"><input type='submit' value='Sửa' class='btn btn-primary' />
				 <input type='submit' value='Xóa' class='btn btn-primary' />
				<a href='quanly.php?xem=hoadon' class='btn btn-danger'>Quay lại hóa đơn</a></td>
			 </tr>
		 </table> 
 	</form> 
 </body>
 </head>