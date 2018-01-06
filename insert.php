<?php
// Filename: insert.php
function check_username(&$mysqli, $username)
{
	$sql = "SELECT * FROM `user` WHERE `username`='${username}'";
	$res = $mysqli->query($sql);
	$res_cnt = $res->num_rows;
	if ($res_cnt == 0)
		return FALSE;	// 可以注册
	return TRUE;	// 此用户名已注册
}

if (array_key_exists('username', $_POST) && 
	array_key_exists('password1', $_POST) && 
	array_key_exists('password2', $_POST))
{
	if ($_POST['password1'] == $_POST['password2'])
	{
		$mysqli = new mysqli("localhost", "root", "", "geocampus");
		if ($mysqli->connect_errno) 
		{
    		echo "连接MySQL失败: " . $mysqli->connect_error;
		}
		$mysqli->query("SET NAMES 'utf8'");
		if (check_username($mysqli, $_POST['username'])) 
		{
			echo "此用户名已注册";
			echo "<br /><a href='geo_reg.php'>返回</a>";
		}
		else
		{
			$sql = "INSERT INTO `user` (username, password) 
					VALUES ('{$_POST['username']}', '{$_POST['password1']}')";
			$mysqli->query($sql);
			echo "<a href='注册成功.html'>注册成功</a>";
			
		}
	}
	else 
	{
		echo "您两次输入的密码不一样";
		echo "<br /><a href='geo_reg.php'>返回</a>";
	}
}
else
{
	echo <<<EOF
	<form action="geo_reg.php" method="post">
	用户名: <input type="text" name="username" /> <br />
	密码: <input type="password" name="password1" /> <br />
	密码确认: <input type="password" name="password2" /> <br />
	<input type="submit" value="注册" />
	</form>
EOF;
}

?>
