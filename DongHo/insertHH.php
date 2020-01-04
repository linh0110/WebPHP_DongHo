<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>    
 <title>Thêm hàng hóa</title>   
   <!--Thư viện Bootstrap CSS -->   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />       
 </head> <!-- Code PHP thêm mới sản phẩm sẽ đặt tại đây -->
 <?php
 error_reporting(E_ALL ^ E_NOTICE);
  if(isset($_GET['luu'])){
	  try{
 include("ketnoi.php");
 $tensp=$_GET['ten'];
 $mancc = $_GET['ncc'];
 $loaihang= $_GET['loaihang'];
 $soluong = $_GET['soluong'];
 $dongia = $_GET['dongia'];
 $sql="INSERT INTO `hanghoa`(`ID_NCC`, `ID_LoaiHang`, `TenHang`, `Soluong`, `DonGia`) VALUES ('$mancc','$loaihang','$tensp','$soluong','$dongia')";
 if($conn->exec($sql)){echo "<div class='alert alert-success'>Tạo sản phẩm mới thành công.</div>";}
 else{echo "<div class='alert alert-danger'>Tạo sản phẩm mới thất bại.</div>";         }   
 }
  catch(PDOException $exception){echo "<div class='alert alert-danger'>Tạo sản phẩm mới thất bại.</div>";     }
  }
 ?>
 <body>         <!-- container -->   
     <form action="insertHH.php" method="get">
     <table class='table table-hover table-responsive table-bordered'> 
        <tr>
        <td>Tên sản phẩm</td>
        <td><input type='text' name='ten' class='form-control' value="<?php echo $tensp ?>"></td>
        </tr>
        <tr>
        <td>Mã nhà cung cấp</td>
        <td><input type='text' name='ncc' class='form-control' value="<?php echo $mancc ?>"></td>
        </tr>
        <tr>
        <td>Mã loại hàng</td>
        <td><input type='text' name='loaihang' class='form-control' value="<?php echo $loaihang ?>"></td>
        </tr>
         <tr>
        <td>Số lượng</td>
        <td><input type='text' name='soluong' class='form-control' value="<?php echo $soluong ?>"></td>
        </tr>
         <tr>
        <td>Đơn giá</td>
        <td><input type='text' name='dongia' class='form-control' value="<?php echo $dongia ?>"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type='submit' name="luu" value='Lưu' class='btn btn-primary' />
        <a href='quanly.php?xem=qlhanghoa' class='btn btn-danger'>Quay lại danh sách sản phẩm</a>
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