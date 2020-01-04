<?php
	include ("ketnoi.php");
	try {
		
		$id=isset($_GET['id']) ? $_GET['id'] : die('LỖI: Không tìm thấy hóa đơn.');
		
		$query = "DELETE FROM chitiethoadon WHERE ID_HD = ?";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(1, $id);
		if($stmt->execute()){
			header('Location: hoadon.php?action=deleted');
			
		}else{
			die('Không thể xóa bản ghi.');
		}
		
		$query1 = "DELETE FROM hoadon WHERE ID_HD = ?";
		$stmt1 = $conn->prepare($query1);
		$stmt1->bindParam(1, $id);
		if($stmt1->execute()){
			header('Location: hoadon.php?action=deleted');
			
		}else{
			die('Không thể xóa bản ghi.');
		}
	}
	catch(PDOException $exception){
		die('LỖI: ' . $exception->getMessage());
	}
?>