<form action="xuly.php" method="POST">
    <table>
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="hoten"></td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><input type="text" name="ngaysinh"></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td><input type="text" name="gioitinh"></td>
        </tr>
        <tr>
            <td>Quê quán</td>
            <td><input type="text" name="quequan"></td>
        </tr>
        <tr>
            <td>Dân tộc</td>
            <td><input type="text" name="dantoc"></td>
        </tr>
        <tr>
            <td>Lớp</td>
            <td>
            	<select name="malop">
            		<?php 
            			$sql_lop="SELECT * FROM lop";
			 			$row_lop=mysqli_query($mysqli,$sql_lop);
			 			while ($lop = mysqli_fetch_array($row_lop)) {
			 			
            		 ?>

            		 <option value="<?php echo $lop["malop"] ?>"><?php echo $lop["tenlop"] ?></option>
            		<?php } ?>
            	</select>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center"><button type="submit" name="them">THÊM</button></td>
        </tr>
    </table>
</form>