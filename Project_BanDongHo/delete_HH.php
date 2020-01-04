<?php
	include ("ketnoi.php");
	try {

		$id=isset($_GET['id']) ? $_GET['id'] : die('LỖI: Không tìm thấy hàng.');

		$query = "DELETE FROM chitiethanghoa WHERE ID_Hang = ?";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(1, $id);
		if($stmt->execute()){
			header('Location: hanghoa.php?action=deleted');
		}else{
			die('Không thể xóa bản ghi.');
		}
		
		$query1 = "DELETE FROM hanghoa WHERE ID_Hang = ?";
		$stmt1 = $conn->prepare($query1);
		$stmt1->bindParam(1, $id);
		if($stmt1->execute()){
			header('Location: hanghoa.php?action=deleted');
		}else{
			die('Không thể xóa bản ghi.');
		}
	}
	catch(PDOException $exception){
		die('LỖI: ' . $exception->getMessage());
	}
?>