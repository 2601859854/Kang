<?php session_start();?>
<?php
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请登录再进入");location.href="login.php";</script>';
		exit();
	}	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$id=$_GET["id"];//接收id
include_once("../conn.php");//连库
$sql=mysqli_query($con,"delete from `school`.`news` where `news`.`id`=".$id."");//删除指定id的数据，执行mysqli语句
echo '<script>alert("删除成功");location.href="newsguanli.php";</script>';//删除成功
mysqli_close($con);//关库


?>

</body>
</html>