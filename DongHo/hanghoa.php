<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>    
 <title>Quản lý hàng hóa </title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />     
	<script type='text/javascript'>
		function delete_user()
		{
			var answer = confirm('Bạn có chắc muốn xóa sản phẩm này không?');
			
		}
	</script>
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
	include("ketnoi.php");
	$sql="select*from hanghoa";
	$HH=$conn->query($sql);

	$action = isset($_GET['action']) ? $_GET['action'] : "";
	if($action=='deleted'){
		echo "<div class='alert alert-success'>Sản phẩm đã được xoá.</div>";
	}
 ?>
 <body>         <!-- container -->   
      <div class="container">          
      <div class="page-header">          
      <h1 align="center">Quản lí sản phẩm</h1> 
 <form action="hanghoa.php" method="get"> 
   <a href='quanly.php?xem=inserthh' class='btn btn-primary m-b-1em'>Thêm sản phẩm mới</a><br /><br />
 <table class='table table-hover table-responsive table-bordered'> 
     <tr style="font:bold" align="center">            
     <td width="27%">Tên sản phẩm</td>
     <td width="19%">Số lượng</td>
     <td width="22%">Đơn giá</td>
     <td width="32%">Chức năng</td>
     </tr>  
     <?php foreach($HH as $hanghoa){ ?>    
      <tr>      
      <td><?php echo $hanghoa['TenHang'] ?></td>   
      <td><?php echo $hanghoa['Soluong'] ?></td>  
       <td><?php echo $hanghoa['DonGia'] ?></td> 
       <td><a href='update_HH.php?id=<?php echo $hanghoa['ID_Hang'] ?>' class='btn btn-primary m-b-1em'>Sửa</a>
       <a href='delete_HH.php?id=<?php echo $hanghoa['ID_Hang'] ?>' onclick='delete_user();' class='btn btn-danger'>Xóa</a>
       <a href='quanly.php?xem=chitiet&id=<?php echo $hanghoa['ID_Hang'] ?>' class='btn btn-primary m-b-1em'>Xem chi tiết</a> </td> 
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