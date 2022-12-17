<?php
    include("connect.php");
    
    if(isset($_POST['them'])){
        $hoten=$_POST['hoten'];
        $ngaysinh=$_POST['ngaysinh'];
        $gioitinh=$_POST['gioitinh'];
        $quequan=$_POST['quequan'];
        $dantoc=$_POST['dantoc'];
        $malop=$_POST['malop'];

        $sql_them=" INSERT INTO sv(hoten, ngaysinh, gioitinh, quequan, dantoc, malop)
        VALUE ('".$hoten."','".$ngaysinh."','".$gioitinh."','".$quequan."','".$dantoc."','".$malop."')";
        mysqli_query($mysqli,$sql_them);
        header("Location: hienthi.php");
    }
    elseif (($_GET['query']) == 'xoa') {
        $masv=$_GET['masv'];

        $sql_xoa="DELETE FROM sv WHERE masv='".$masv."'";
        mysqli_query($mysqli,$sql_xoa);
        header("Location: hienthi.php");
    }
    elseif (isset($_POST['sua'])) {
      	$masv=$_GET['masv'];
      	$hoten=$_POST['hoten'];
	    $ngaysinh=$_POST['ngaysinh'];
	    $gioitinh=$_POST['gioitinh'];
	    $quequan=$_POST['quequan'];
	    $dantoc=$_POST['dantoc'];
	    $malop=$_POST['malop'];
      	$sql_sua = "UPDATE sv SET hoten = '$hoten', ngaysinh = '$ngaysinh',gioitinh = '$gioitinh',quequan = '$quequan',dantoc = '$dantoc',malop = '$malop' WHERE masv = '$masv'";
      	mysqli_query($mysqli,$sql_sua);
      	header("Location: hienthi.php");
    }
?>