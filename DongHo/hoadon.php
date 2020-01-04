<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý hóa đơn bán hàng</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />     
	<script type='text/javascript'>
		function delete_user()
		{
			var answer = confirm('Bạn có chắc muốn xóa hóa đơn này không?');
			
		}
	</script>
</head>

<?php
	include("ketnoi.php");
	$sql="select*from hoadon";
	$HD=$conn->query($sql);

	$action = isset($_GET['action']) ? $_GET['action'] : "";
	if($action=='deleted'){
		echo "<div class='alert alert-success'>Hóa đơn đã được xoá.</div>";
	}
 ?>
 <body>         <!-- container -->   
      <div class="container">     
      <div class="page-header">          
      <h1 align="center"> Hóa đơn</h1> 
 <form action="hoadon.php" method="get"> 
 <table class='table table-hover table-responsive table-bordered'> 
     <tr style="font:bold" align="center">            
     <td width="8%">Mã hóa đơn</td>
     <td width="12%">Ngày mua</td>
     <td width="13%">Thành tiền</td>
	 <td width="13%">Hình thức thanh toán</td>
	 <td width="30%">Địa chỉ giao</td>
     <td width="24%">Chức năng</td>
     </tr>  
     <?php foreach($HD as $hoadon){ ?>    
      <tr>      
      	<td><?php echo $hoadon['ID_HD'] ?></td>   
      	<td><?php echo $hoadon['NgayMua'] ?></td>  
        <td><?php echo $hoadon['ThanhTien'] ?></td> 
		<td><?php echo $hoadon['HinhThucThanhToan'] ?></td> 
		<td><?php echo $hoadon['DiaChiGiao'] ?></td> 
       	<td><a href='#' class='btn btn-primary m-b-1em'>Sửa</a>
       	<a href='delete_HD.php?id=<?php echo $hoadon['ID_HD'] ?>' onclick='delete_user();' class='btn btn-danger'>Xóa</a>
       	<a href='quanly.php?xem=chitiethd&id=<?php echo $hoadon['ID_HD'] ?>' class='btn btn-primary m-b-1em'>Xem chi tiết</a> </td> 
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