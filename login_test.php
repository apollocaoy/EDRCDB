
<?php
// Filename: login.php
ob_start();
//header("Content-Type:text/html;charset=utf-8");
//header("Content-Type:text/html;charset=gb2312");
session_start();			//初始SESSION变量
include("conn.php");	//包含数据库文件


//mysql_query("set names 'gb2312'");
//mysql_query("SET NAMES UTF8");//设置中文字符集
//mysql_query('set character_set_client = utf8');
//mysql_query('set character_set_connection = GBK');
//mysql_query('set character_set_results = utf8');

if(isset($_GET['submit']) && $_GET['submit']=="登录")	
{//检测提交的数据是否存在与数据库之中			
	
	//$check="select username from users where username='".trim($_POST['username'])."'";		
	$check="select * from users where username='".trim($_GET['username'])."'";	
	$result=mysql_query($check, $conn);
	$array=mysql_fetch_array($result,MYSQL_BOTH);//返回结果集为数字数组和关联数字均可的形式（参看二级MySQL的169页）
	
	//$array=mysql_fetch_array($result,MYSQL_ASSOC);//返回结果集为关联索引的方式的数组形式（参看二级MySQL的169页）
	//$array=mysql_fetch_assoc($result);//返回结果集为关联索引的方式的数组形式（参看二级MySQL的169页）
	//$array=mysql_fetch_array($result,MYSQL_NUM);//返回结果集为数字索引方式数组形式（参看二级MySQL的169页）
	//$array=mysql_fetch_row($result);//返回结果集为数字索引方式的数组形式（参看二级MySQL的169页）	
	//$_SESSION['username']=$_GET['username'];	
	//$_SESSION['password']=$_GET['password'];
	
	var_dump($array);  //调试输出
	var_dump($_GET['username']);
	var_dump($_GET['password']);

/*	
	if( $array['name']==trim($_GET['username']) && $array['password']==trim($_GET['password']))
	//if( $array[1]==trim($_GET['username']) && $array[5]==trim($_GET['password']))
	{
		echo "<script language='javascript'>alert('登录成功'); window.location.href='index.htm';</script>";			
		
	}
	else 
	{
			echo "<script language='javascript'>alert('用户名或密码错误！'); history.back();</script>";
			echo "错误编号：".mysql_errno()."<br>";
			echo "错误信息：".mysql_error()."<br>";
	} 
*/
	
}	

//mysql_close();

//方案二
/*
if(isset($_POST['submit']) && $_POST['submit']=="登录")	{			
	$check="select username from zc where username='".$_POST['username']."'and zc_password='".$_POST['zc_password']."'";		//检测提交的数据是否存在与数据库之中
	$result=mysql_query($check,$conn);	
	
	//	$row_mount=mysql_num_rows($result,MYSQL_NUM);	//获取满足条件的记录的量（行数）
	//  $order_seek=mysql_data_seek($result,row);        //将记录指针直接指向结果集中的某个记录（参看二级MySQL的171页）

	//	$_SESSION['username']=$_POST['username'];	
	//	$_SESSION['zc_password']=$_POST['zc_password'];	
	if($result)
		{
			$array=mysql_fetch_array($result);//返回结果集为数组形式（参看二级MySQL的169页）
			if($array['username']==$_POST['username'] && $array['zc_password']==$_POST['zc_password'])
			
				{
				echo "<script language='javascript'>alert('登录成功'); window.location.href='baoxiushouye.html';</script>";	
				}
			else{	
				echo "<script language='javascript'>alert('登录失败，密码或者是用户名不正确'); history.back();</script>";		
				}
		}

	// else{
		// echo "<script language='javascript'>alert('登录失败，密码或者是用户名不正确'); history.back();</script>";		
		// } 

*/

//方案三
/*
if(isset($_POST['submit']) && $_POST['submit']=="登录")	{//检测提交的数据是否存在与数据库之中			
	
	$check="select username from zc where username='".trim($_POST['username'])."'and zc_password='".trim($_POST['zc_password'])."'";		
	$result=mysql_query($check,$conn);
	$array=mysql_fetch_array($result);  //返回结果集为数组形式（参看二级MySQL的169页）	
	if($result)
		{	
			//$rows=mysql_num_rows($result);//获取满足条件的记录的量（行数）
			if($array[1]==trim($_POST['username'])and $array[2]==trim($_POST['zc_password']))
				 {//因为数据库设计时姓名唯一，故小于1或大于1都不允许
					//如果数据库中满足条件的记录数小于1则说明用户名不存在
				echo "<script language='javascript'>alert('登录成功'); window.location.href='baoxiushouye.html';</script>";		
					
					echo "<script language='javascript'>alert('用户名不存在！')； history.back();</script>";
					echo "错误编号：".mysql_errno()."<br>";
					echo "错误信息：".mysql_error()."<br>";
				} 
			else if($array[2]==trim($_POST['zc_password']))
				 {//因为数据库设计时姓名唯一，故小于1或大于1都不允许
					//如果数据库中满足条件的记录数小于1则说明用户名不存在
					
					
					echo "<script language='javascript'>alert('用户名不存在！')； history.back();</script>";
					//echo "错误编号：".mysql_errno()."<br>";
					//echo "错误信息：".mysql_error()."<br>";
				} 
			if($array[1]==trim($_POST['username']))
				{	//$array=mysql_fetch_array($result,MYSQL_NUM)
					//echo "<script language='javascript'>alert('共有.$rows.位同名用户')；</script>";
					//echo "数据库中有：".$rows."位同名用户";
					 
					echo "<script language='javascript'>alert('登录成功'); window.location.href='baoxiushouye.html';</script>";	
				}
	
				

 
			 else
				{
			
					//echo "<script language='javascript'>alert('登录成功'); window.location.href='baoxiushouye.html';</script>";	
				} 
		}
}
//mysql_close();

*/




 /*
 session_start();
if (isset($_SESSION['username']))
{
	echo "欢迎" . $_SESSION['username']."您登录抗震减灾信息管理系统！<br />";
	echo "<br /><a href='Index.html'></a>";
	
}
elseif (array_key_exists('username', $_POST) && 
	array_key_exists('password', $_POST))
{
	$mysqli = new mysqli("localhost", "root", "", "users");
	if ($mysqli->connect_errno)
	{
    		echo "连接MySQL失败: " . $mysqli->connect_error;
	}
	$mysqli->query("SET NAMES 'utf8'");
	$sql = "SELECT * FROM `users` WHERE `username`='{$_POST['username']}' 
		AND `password`='{$_POST['password']}'";
	$res = $mysqli->query($sql);
	if ($res->num_rows)
	{
		$_SESSION['username'] = $_POST['username'];
		
		echo "<br /><a href='login.html'></a>";
	
	}
	else
	{
		echo "密码错误或用户不存在";
		echo "<br /><a href='login.htm'>重新登录</a>";
	}
}
else
{
	echo <<<EOF
	<form action="login.html" method="post">
	用户名: <input type="text" name="username" /> <br />
	密码: <input type="password" name="password" /> <br />
	<input type="submit" value="登录"/>
	</form>
EOF;
}

 */

?>







