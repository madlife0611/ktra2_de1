<?php
include("connect.php");
$masv=$_GET['masv'];
$sql_sua="SELECT * FROM sv WHERE '".$masv."' = masv ";
$row_sua=mysqli_query($mysqli, $sql_sua);
$row=mysqli_fetch_array($row_sua);
?>
<form action="xuly.php?query=sua&masv=<?php echo $row['masv'] ?>" method="POST" >
<table>
    <tr>
        <td  style="text-align: center" colspan="2">SỬA</td>
    </tr>
    <tr>
        <td>Họ và tên</td>
       <td><input type="text" name="hoten" value="<?php echo $row["hoten"] ?>"></td> 
    </tr>
    <tr>
        <td>Ngày sinh</td>
        <td><input type="text" name="ngaysinh" value="<?php echo $row["ngaysinh"] ?>"></td>
    </tr>
    <tr>
        <td>Giới tính</td>
        <td><input type="text" name="gioitinh" value="<?php echo $row["gioitinh"] ?>"></td>
    </tr>
    <tr>
        <td>Quê quán</td>
        <td><input type="text" name="quequan" value="<?php echo $row["quequan"] ?>"></td>
    </tr>
    <tr>
        <td>Dân tộc</td>
        <td><input type="text" name="dantoc" value="<?php echo $row["dantoc"] ?>"></td>
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

        		 <option <?php if(isset($lop["malop"]) && $lop["malop"] == $lop["malop"]){ ?> selected <?php } ?> value="<?php echo $lop["malop"] ?>"><?php echo $lop["tenlop"] ?></option>
        		<?php } ?>
        	</select>
        </td>
    </tr>


    <tr>
        <td style="text-align: center" colspan="2" ><button type="submit" name="sua">Sửa</button></td>
    </tr>
</table>
</form>