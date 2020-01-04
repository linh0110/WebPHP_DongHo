<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>    
 <title>Thêm nhà cung cấp</title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />       
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
 error_reporting(E_ALL ^ E_NOTICE);
  if(isset($_GET['luu'])){
	  try{
 include("ketnoi.php");
 $mancc=$_GET['id'];
 $tenncc=$_GET['tenncc'];
 $sdt = $_GET['sdt'];
 $logo = $_GET['logo'];
 $sql="INSERT INTO `nhacungcap`(`ID_NCC`, `TenNCC`,`SĐT`,`Logo`) VALUES ('$mancc','$tenncc','$sdt','$logo')";
 if($conn->exec($sql)){echo "<div class='alert alert-success'>Tạo nhà cung cấp mới thành công.</div>";}
 else{echo "<div class='alert alert-danger'>Tạo nhà cung cấp mới thất bại.</div>";         }   
 }
  catch(PDOException $exception){echo "<div class='alert alert-danger'>Tạo nhà cung cấp mới thất bại.</div>";     }
  }
 ?>
 <body>         <!-- container -->   
     <form action="insertNCC.php" method="get">
     <table class='table table-hover table-responsive table-bordered'> 
        <tr>
        <td>Tên nhà cung cấp</td>
        <td><input type='text' name='tenncc' class='form-control' value="<?php echo $tenncc ?>"></td>
        </tr>
        <tr>
        <td>Số điện thoại</td>
        <td><input type='text' name='sdt' class='form-control' value="<?php echo $sdt ?>"></td>
        </tr>
        <tr>
        <td>Logo</td>
        <td><input type='text' name='logo' class='form-control' value="<?php echo $logo ?>"></td>
		</tr>
        <tr>
        <td></td>
        <td><input type='submit' name="luu" value='Lưu' class='btn btn-primary' />
        <a href='quanly.php?xem=nhacc' class='btn btn-danger'>Quay lại danh sách nhà cung cấp</a>
         </td>
         </tr>
         </table>
         </form> 
                          </div>             <!-- html form tạo mới sản phẩm sẽ đặt tại đây -->              
                             </div> <!-- end .container -->         <!-- jQuery (Thư viện Jquery, sự cần thiết cho Bootstrap's JavaScript) --> <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  
                                 <!--Thư viện Bootstrap JavaScript -->
                                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
                                   </body> 
                                   </html>