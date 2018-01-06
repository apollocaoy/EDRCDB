<?php
header("Content-Type:text/html;charset=utf-8");	
//header("Content-Type:text/html;charset=gb2312");
session_start();						//初始化session变量
require_once("conn.php");		//包含数据库文件


//mysql_query("set names 'gb2312'");
mysql_query("SET NAMES UTF8");//设置中文字符集
mysql_query('set character_set_client = utf8');
mysql_query('set character_set_connection = GBK');
mysql_query('set character_set_results = utf8');

$zc_name=trim($_POST['anlibianhao']);	//去除表单提交案例编号的空格
$zc_sex=trim($_POST['anlimingcheng']);

$sql="insert into zc (案例编号,案例名称)";
$sql=$sql."values('${anlibianhao}','${anlibianhao}')";

//var_dump($sql);

if(isset($_POST['submit']) && $_POST['submit']="保存") {		//判断保存按钮
	if(mysql_query($sql,$conn))
		{		//将表单中提交的数据存储到数据表中
			echo"<script language='javascript'>alert('数据添加成功!');
			
			</script>";	//数据添加成功依然停留在此页
		}
	else
		{
			echo"<script language='javascript'>alert('数据添加失败!'.mysql_error());
			history.back();</script>";	//如果添加操作失败，则给出提示
		}
}
?>

