<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>    
 <title>Thêm người dùng</title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />       
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
 error_reporting(E_ALL ^ E_NOTICE);
  if(isset($_GET['luu'])){
	  try{
 include("ketnoi.php");
 $hoten=$_GET['Ten'];
 $email = $_GET['Email'];
 $password = $_GET['Password'];
 $chucvu = $_GET['ChucVu'];
 $sql="INSERT INTO `users`(`HoTen`, `Email`,`Password`,`ChucVu`) VALUES ('$hoten','$email','$password','$chucvu')";
 if($conn->exec($sql)){echo "<div class='alert alert-success'>Tạo người dùng mới thành công.</div>";}
 else{echo "<div class='alert alert-danger'>Tạo người dùng mới thất bại.</div>";         }   
 }
  catch(PDOException $exception){echo "<div class='alert alert-danger'>Tạo người dùng mới thất bại.</div>";     }
  }
 ?>
 <body>         <!-- container -->   
     <form action="insertUSER.php" method="get">
     <table class='table table-hover table-responsive table-bordered'> 
        <tr>
        <td>Họ và tên</td>
        <td><input type='text' name='Ten' class='form-control' value="<?php echo $hoten ?>"></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type='text' name='Email' class='form-control' value="<?php echo $email ?>"></td>
        </tr>
        <tr>
        <td>Password</td>
        <td><input type='text' name='Password' class='form-control' value="<?php echo $password ?>"></td>
		</tr>
		<tr>
        <td>Chức vụ</td>
        <td><input type='text' name='ChucVu' class='form-control' value="<?php echo $chucvu ?>"></td>
		</tr>
        <tr>
        <td></td>
        <td><input type='submit' name="luu" value='Lưu' class='btn btn-primary' />
        <a href='quanly.php?xem=nguoidung' class='btn btn-danger'>Quay lại danh sách người dùng</a>
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