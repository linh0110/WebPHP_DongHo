<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1>Cập nhật thông tin hàng hóa</h1>
		</div>
		<?php
		
		include ("ketnoi.php");
		if(isset($_GET['id']))
 			$id=$_GET['id'];
		try {
			$query = "SELECT ID_Hang, ID_NCC, ID_LoaiHang, TenHang, SoLuong, DonGia FROM hanghoa WHERE ID_Hang = ? LIMIT 0,1";
			$stmt = $conn->prepare( $query );
			$stmt->bindParam(1, $id);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$mancc=$row['ID_NCC'];
			$malh=$row['ID_LoaiHang'];
			$name = $row['TenHang'];
			$Quantity = $row['SoLuong'];
			$price = $row['DonGia'];
		}

		catch(PDOException $exception){
			die('LỖI: ' . $exception->getMessage());
		}
		?>

		<?php

		if($_POST){
			try{
			
				$query = "UPDATE hanghoa
				SET ID_NCC=:idncc, ID_LoaiHang=:idlh, TenHang=:name, SoLuong=:quantity, DonGia=:price
				WHERE ID_Hang = :id";
			
				$stmt = $conn->prepare($query);
				
				$mancc=htmlspecialchars(strip_tags($_POST['idncc']));
				$malh=htmlspecialchars(strip_tags($_POST['idlh']));
				$name=htmlspecialchars(strip_tags($_POST['name']));
				$Quantity=htmlspecialchars(strip_tags($_POST['quantity']));
				$price=htmlspecialchars(strip_tags($_POST['price']));
				
				$stmt->bindParam(':idncc',$mancc);
				$stmt->bindParam(':idlh',$malh);
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':quantity', $Quantity);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':id', $id);
				if($stmt->execute()){
					echo "<div class='alert alert-success'>Cập nhật sản phẩm thành công.</div>";
				}else{
					echo "<div class='alert alert-danger'>Quá trình cập nhật thất bại. Vui lòng thử lại!</div>";
				}
			}
			// hiển thị lỗi
			catch(PDOException $exception){
				die('LỖI: ' . $exception->getMessage());
			}
		}
		?>
		<!-- HTML form chứa thông tin của bản ghi dữ liệu cần cập nhật -->
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?ID_Hang={$id}");?>" method="post">
			<table class='table table-hover table-responsive table-bordered'>
				<tr>
					<td>Mã nhà cung cấp</td>
					<td><input type='text' name='idncc' value="<?php echo htmlspecialchars($mancc, ENT_QUOTES); ?>"
						class='form-control' /></td>
					</tr>
				<tr>
					<td>Mã loại hàng</td>
					<td><input type='text' name='idlh' value="<?php echo htmlspecialchars($malh, ENT_QUOTES); ?>"
						class='form-control' /></td>
					</tr>
					<tr>
					<td>Tên sản phẩm</td>
					<td><input type='text' name='name' value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>"
						class='form-control' /></td>
					</tr>
					<tr>
						<td>Số lượng</td>
						<td><input type="text" name='quantity' class='form-control' value="<?php echo htmlspecialchars($Quantity,ENT_QUOTES); ?>"/></td>
						</tr>
						<tr>
							<td>Đơn giá</td>
							<td><input type='text' name='price' value="<?php echo htmlspecialchars($price, ENT_QUOTES); ?>"
								class='form-control' /></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type='submit' value='Cập nhật' class='btn btn-primary' />
									<a href='quanly.php?xem=qlhanghoa' class='btn btn-danger'>Quay lại danh sách sản phẩm</a>
								</td>
							</tr>
						</table>
					</form>
				</div> <!-- end .container -->
				<!-- jQuery (JQuery, Thư viện hỗ trợ cho Bootstrap JavaScript) -->
				<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<!-- Thư viện Bootstrap JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</body>
			</html>