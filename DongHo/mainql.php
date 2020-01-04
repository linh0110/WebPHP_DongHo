<div class="main">
 <?php
   
   if(isset($_GET['xem'])){
   $bi= $_GET['xem'];
   }
   else
   {
   $bi = '';
   }if($bi=='qlhanghoa')
		include('hanghoa.php');
	elseif($bi=='nhacc')
		include('nhacungcap.php');
	elseif($bi=='nguoidung')
		include('nguoidung.php');
	elseif($bi=='hoadon')
		include('hoadon.php');
	elseif($bi=='chitiet')
		include('chitiethangql.php');
	elseif($bi=='chitiethd')
		include('chitiethoadonql.php');
	elseif($bi=='inserthh')
		include('insertHH.php');
	elseif($bi=='insertncc')
		include('insertNCC.php');
	elseif($bi=='insertuser')
		include('insertUSER.php');
	?>
</div>