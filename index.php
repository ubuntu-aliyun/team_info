<?php
include 'header.php';
?>
<div id="main">
   <h2 class="top_title"><a href="#"></a></h2>
   <div class="demo">
		<div id="result"></div>
		<h1>请输入组员兴趣关键字，例如:</h1><br/>
		<form method="post" action="index.php">
   		<input name="hobby" id="hobby" placeholder="read" autofocus></input><br/>
		<input type="submit" value = "查找"></input></br></br>
		</form>
		
<?php
    $mysql_server_name="127.0.0.1"; //数据库服务器名称
    $mysql_username="root"; // 连接数据库用户名[默认为root，如果忘记可以通过select * from mysql.user 方式查询]
    $mysql_password="0000"; // 连接数据库密码
    $mysql_database="hwk603"; // 数据库的名字	
    $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
	mysql_query("set names utf8");
	
	$h=$_POST["hobby"];
    $strsql="select * from team_member where t_hobby like '$h'";
    $result=mysql_db_query($mysql_database, $strsql, $conn);
	$row=mysql_fetch_row($result);
	echo '<textarea>';
	echo "\n";
	echo "学号:".$row[0];
	echo "\n";
	echo "\n";
	echo "姓名:".$row[1];
	echo "\n";
	echo "\n";
	echo "出生日期:".$row[2];
	echo "\n";
	echo "\n";
	echo "兴趣爱好:".$row[3];
	echo '</textarea>';
    mysql_close();  
?>

    	

<?php
include 'footer.php';
?>
