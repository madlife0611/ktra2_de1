<?php 
	include("connect.php");
    $sql_sv="SELECT * FROM sv";
    $row_sv=mysqli_query($mysqli,$sql_sv);
 ?>
 <table border="1">
 	<tr>
 		<th>STT</th>
 		<th>Mã sinh viên</th>
 		<th>Họ tên</th>
 		<th>Giới tính</th>
 		<th>Quê quán</th>
 		<th>Dân tộc</th>
 		<th>Ngày sinh</th>
 		<th>Tên lớp</th>
 		<th>Tên GV chủ nhiệm</th>
 		<th>Chức năng</th>
 	</tr>
 	<?php 
 		$i = 0;
 		while ($row = mysqli_fetch_array($row_sv)) {
 			// code...
 			$i++;	
 	 ?>
 	<tr>
 		<td><?php echo $i ?></td>
 		<td><?php echo $row["masv"] ?></td>
 		<td><?php echo $row["hoten"] ?></td>
 		<td><?php echo $row["gioitinh"] ?></td>
 		<td><?php echo $row["quequan"] ?></td>
 		<td><?php echo $row["dantoc"] ?></td>
 		<td><?php echo $row["ngaysinh"] ?></td>
 		<?php 
 			$malop=$row['malop'];
 			$sql_lop="SELECT * FROM lop WHERE malop='$malop'";
 			$row_lop=mysqli_query($mysqli,$sql_lop);
 			$lop = mysqli_fetch_array($row_lop);
 		 ?>
 		<td><?php echo $lop["tenlop"] ?></td>
 		<td><?php echo $lop["giaoviencn"] ?></td>
 		<td>
            <a onclick="return window.confirm('Are you sure?');" href="xuly.php?query=xoa&masv=<?php echo $row['masv'] ?> ">Xóa</a> |
            <a href="sua.php?query=sua&masv=<?php echo $row['masv'] ?> ">Sửa</a>
        </td>
 	</tr>
 	<?php 
 		}
 	 ?>

 </table>