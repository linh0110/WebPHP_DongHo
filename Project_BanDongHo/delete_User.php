<?php
	include ("ketnoi.php");
	try {
		
		$id=isset($_GET['email']) ? $_GET['email'] : die('LỖI: Không tìm thấy người dùng.');
		
		$query = "DELETE FROM users WHERE Email = ?";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(1, $id);
		if($stmt->execute()){
			header('Location: nguoidung.php?action=deleted');
			
		}else{
			die('Không thể xóa bản ghi.');
		}
	}
	catch(PDOException $exception){
		die('LỖI: ' . $exception->getMessage());
	}
?>