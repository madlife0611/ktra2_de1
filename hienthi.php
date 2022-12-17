<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hienthi</title>
</head>
<body>
	<div class="abc">
        <a href="?query=them">Thêm</a>

   
    <?php
    include("connect.php");

    if(isset($_GET["query"])){
        $query=$_GET["query"];
    }
    else {
        $query="";
    }


    if($query=="them"){
        include("them.php");
    }

    include("danhsach.php");
    
    if($query=="sua"){
        include("sua.php");
    }
    ?>
     </div>
</body>
</html>