<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>    
 <title>Quản lí nhà cung cấp</title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
	include("ketnoi.php");
	$sql="select*from nhacungcap";
	$HH=$conn->query($sql);
	
 ?>
 <body>         <!-- container -->   
      <div class="container">          
      <div class="page-header">          
      <h1 align="center">Quản lý nhà cung cấp</h1> 
 <form action="nhacungcap.php" method="get"> 
   <a href='quanly.php?xem=insertncc' class='btn btn-primary m-b-1em'>Thêm nhà cung cấp</a><br /><br />
 <table class='table table-hover table-responsive table-bordered'> 
     <tr style="font:bold" align="center" bgcolor="#0033FF">            
     <td width="27%"><b>Tên nhà cung cấp</b></td>
     <td width="19%"><b>Số điện thoại</b></td>
     <td width="22%"><b>Logo</b></td>
     <td width="32%"><b>Chức năng</b></td>
     </tr>  
     <?php foreach($HH as $hanghoa){ ?>    
      <tr>      
      <td><?php echo $hanghoa['TenNCC'] ?></td>   
      <td><?php echo $hanghoa['SĐT'] ?></td>  
       <td align="center"><img src="image/<?php echo $hanghoa['Logo'] ?>" width="150px" height="130px" /></td> 
       <td><a href='#' class='btn btn-primary m-b-1em'>Sửa</a>
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