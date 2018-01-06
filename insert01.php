<?php

require_once "conn.php";		//连通数据库
/*
function check_casename(&$mysqli, $casename)
{
	$sql = "SELECT * FROM `case_identify` WHERE `案例名称`='${anlimingcheng}'";
	$res = $mysqli->query($sql);
	$res_cnt = $res->num_rows;
	if ($res_cnt == 0)
		return FALSE;	// 可以添加
	return TRUE;	// 此案例已经添加
}
if (check_casename($mysqli, $_POST['anlimingcheng']==0)) {
	  $mysqli = new mysqli("localhost:3306", "root", "123", "edrcdb");
	  $mysqli->query("SET NAMES 'utf8'");
		if (check_casename($mysqli, $_POST['anlimingcheng'])) 
		{
			echo"<script language='javascript'>alert('此案例名称已存在!')</script>";
			echo "<br /><a href='retrieve.php'>查询此案例名</a>";
		}
		else
			{$sql = "INSERT INTO `case_identify` (案例编号,案例名称) 
					VALUES ('{$_POST['anlibianhao']}', '{$_POST['anlimingcheng']}')";
			$mysqli->query($sql);
			echo"<script language='javascript'>alert('添加成功!');
			}		
		
	}

*/
$anlibianhao=trim($_POST['anlibianhao']);	//去除表单提交案例编号的空格
$anlimingcheng=trim($_POST['anlimingcheng']);

$sql="insert into case_identify (案例编号,案例名称)";
$sql=$sql."values('${anlibianhao}','${anlimingcheng}')";

if(mysql_query($sql,$conn))
		{		//将表单中提交的数据存储到数据表中
			echo"<script language='javascript'>alert('数据添加成功!')</script>";
			
			//数据添加成功依然停留在此页
		}
	else
		{
			echo"<script language='javascript'>alert('数据添加失败!'.mysql_error());
		history.back();</script>";	//如果添加操作失败，则给出提示
	}

?>



