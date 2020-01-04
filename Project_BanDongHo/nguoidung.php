<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>    
 <title>Quản lí người dùng</title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />       
	<script type='text/javascript'>
		function delete_user()
		{
			var answer = confirm('Bạn có chắc muốn xóa người dùng này không?');
			
		}
	</script>
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
	include("ketnoi.php");
	$sql="select*from users";
	$HH=$conn->query($sql);
	$action = isset($_GET['action']) ? $_GET['action'] : "";
	if($action=='deleted'){
		echo "<div class='alert alert-success'>Người dùng đã được xoá.</div>";
	}
 ?>
 <body>         <!-- container -->   
      <div class="container">          
      <div class="page-header">          
      <h1 align="center">Quản lý người dùng</h1> 
 <form action="nguoidung.php" method="get"> 
   <a href='quanly.php?xem=insertuser' class='btn btn-primary m-b-1em'>Thêm User</a><br /><br />
 <table class='table table-hover table-responsive table-bordered'> 
     <tr style="font:bold" align="center" bgcolor="#0033FF">            
     <td width="18%"><b>Họ tên</b></td>
     <td width="19%"><b>Email</b></td>
     <td width="14%"><b>PassWord</b></td>
     <td width="18%"><b>Chức vụ</b></td>
     <td width="31%"><b>Chức năng</b></td>
     </tr>  
     <?php foreach($HH as $hanghoa){ ?>    
      <tr>      
      <td><?php echo $hanghoa['HoTen'] ?></td>   
      <td><?php echo $hanghoa['Email'] ?></td>  
       <td><?php echo $hanghoa['Password'] ?></td> 
       <td><?php echo $hanghoa['ChucVu'] ?></td> 
       <td><a href='#' class='btn btn-primary m-b-1em'>Sửa</a>
       <a href='delete_User.php?email=<?php echo $hanghoa['Email'] ?>' onclick='delete_user();' class='btn btn-danger'>Xóa</a>
       </tr>  
     <?php } ?>
        </table> 
        </form>  
                          </div>             <!-- html form tạo mới sản phẩm sẽ đặt tại đây -->              
                             </div> <!-- end .container -->         <!-- jQuery (Thư viện Jquery, sự cần thiết cho Bootstrap's JavaScript) --> <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  
                                 <!--Thư viện Bootstrap JavaScript -->
                                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
                                   </body> 
                                   </html>