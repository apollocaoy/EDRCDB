<? php>
//Firename:conn.php
header("Content-Type:text/html;charset=utf-8");
//header("Content-Type:text/html;charset=gb2312");
	
$mysql_server_name="localhost:3306"; //mysql数据库服务器
$mysql_username="root"; //mysql数据库用户名 
$mysql_password="123"; //mysql数据库密码
$mysql_database="XK"; //mysql数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("数据库服务器连接失败！<br>");
mysql_select_db($mysql_database,$conn)or die ("数据库选择失败！");

//msql_query("set names 'GBK'");//设置中文字符集
mysql_query("SET NAMES UTF8");//设置中文字符集
mysql_query('set character_set_client = utf8');
mysql_query('set character_set_connection = GBK');
mysql_query('set character_set_results = utf8');

 if (!$conn) {
	die ("连接失败！".mysql_error());//终止运行，并返回错误信息
}
	echo "MySQL联通成功<br>服务器：$mysql_server_name<br>用户名：$mysql_username";
	
	echo "Hello!数据库mycounter已经成功建立！";

	mysql_close($conn);

 
 
 ?>