
<?php
// Filename: login.php
ob_start();
//header("Content-Type:text/html;charset=utf-8");
//header("Content-Type:text/html;charset=gb2312");
session_start();			//��ʼSESSION����
include("conn.php");	//�������ݿ��ļ�


//mysql_query("set names 'gb2312'");
//mysql_query("SET NAMES UTF8");//���������ַ���
//mysql_query('set character_set_client = utf8');
//mysql_query('set character_set_connection = GBK');
//mysql_query('set character_set_results = utf8');

if(isset($_GET['submit']) && $_GET['submit']=="��¼")	
{//����ύ�������Ƿ���������ݿ�֮��			
	
	//$check="select username from users where username='".trim($_POST['username'])."'";		
	$check="select * from users where username='".trim($_GET['username'])."'";	
	$result=mysql_query($check, $conn);
	$array=mysql_fetch_array($result,MYSQL_BOTH);//���ؽ����Ϊ��������͹������־��ɵ���ʽ���ο�����MySQL��169ҳ��
	
	//$array=mysql_fetch_array($result,MYSQL_ASSOC);//���ؽ����Ϊ���������ķ�ʽ��������ʽ���ο�����MySQL��169ҳ��
	//$array=mysql_fetch_assoc($result);//���ؽ����Ϊ���������ķ�ʽ��������ʽ���ο�����MySQL��169ҳ��
	//$array=mysql_fetch_array($result,MYSQL_NUM);//���ؽ����Ϊ����������ʽ������ʽ���ο�����MySQL��169ҳ��
	//$array=mysql_fetch_row($result);//���ؽ����Ϊ����������ʽ��������ʽ���ο�����MySQL��169ҳ��	
	//$_SESSION['username']=$_GET['username'];	
	//$_SESSION['password']=$_GET['password'];
	
	var_dump($array);  //�������
	var_dump($_GET['username']);
	var_dump($_GET['password']);

/*	
	if( $array['name']==trim($_GET['username']) && $array['password']==trim($_GET['password']))
	//if( $array[1]==trim($_GET['username']) && $array[5]==trim($_GET['password']))
	{
		echo "<script language='javascript'>alert('��¼�ɹ�'); window.location.href='index.htm';</script>";			
		
	}
	else 
	{
			echo "<script language='javascript'>alert('�û������������'); history.back();</script>";
			echo "�����ţ�".mysql_errno()."<br>";
			echo "������Ϣ��".mysql_error()."<br>";
	} 
*/
	
}	

//mysql_close();

//������
/*
if(isset($_POST['submit']) && $_POST['submit']=="��¼")	{			
	$check="select username from zc where username='".$_POST['username']."'and zc_password='".$_POST['zc_password']."'";		//����ύ�������Ƿ���������ݿ�֮��
	$result=mysql_query($check,$conn);	
	
	//	$row_mount=mysql_num_rows($result,MYSQL_NUM);	//��ȡ���������ļ�¼������������
	//  $order_seek=mysql_data_seek($result,row);        //����¼ָ��ֱ��ָ�������е�ĳ����¼���ο�����MySQL��171ҳ��

	//	$_SESSION['username']=$_POST['username'];	
	//	$_SESSION['zc_password']=$_POST['zc_password'];	
	if($result)
		{
			$array=mysql_fetch_array($result);//���ؽ����Ϊ������ʽ���ο�����MySQL��169ҳ��
			if($array['username']==$_POST['username'] && $array['zc_password']==$_POST['zc_password'])
			
				{
				echo "<script language='javascript'>alert('��¼�ɹ�'); window.location.href='baoxiushouye.html';</script>";	
				}
			else{	
				echo "<script language='javascript'>alert('��¼ʧ�ܣ�����������û�������ȷ'); history.back();</script>";		
				}
		}

	// else{
		// echo "<script language='javascript'>alert('��¼ʧ�ܣ�����������û�������ȷ'); history.back();</script>";		
		// } 

*/

//������
/*
if(isset($_POST['submit']) && $_POST['submit']=="��¼")	{//����ύ�������Ƿ���������ݿ�֮��			
	
	$check="select username from zc where username='".trim($_POST['username'])."'and zc_password='".trim($_POST['zc_password'])."'";		
	$result=mysql_query($check,$conn);
	$array=mysql_fetch_array($result);  //���ؽ����Ϊ������ʽ���ο�����MySQL��169ҳ��	
	if($result)
		{	
			//$rows=mysql_num_rows($result);//��ȡ���������ļ�¼������������
			if($array[1]==trim($_POST['username'])and $array[2]==trim($_POST['zc_password']))
				 {//��Ϊ���ݿ����ʱ����Ψһ����С��1�����1��������
					//������ݿ������������ļ�¼��С��1��˵���û���������
				echo "<script language='javascript'>alert('��¼�ɹ�'); window.location.href='baoxiushouye.html';</script>";		
					
					echo "<script language='javascript'>alert('�û��������ڣ�')�� history.back();</script>";
					echo "�����ţ�".mysql_errno()."<br>";
					echo "������Ϣ��".mysql_error()."<br>";
				} 
			else if($array[2]==trim($_POST['zc_password']))
				 {//��Ϊ���ݿ����ʱ����Ψһ����С��1�����1��������
					//������ݿ������������ļ�¼��С��1��˵���û���������
					
					
					echo "<script language='javascript'>alert('�û��������ڣ�')�� history.back();</script>";
					//echo "�����ţ�".mysql_errno()."<br>";
					//echo "������Ϣ��".mysql_error()."<br>";
				} 
			if($array[1]==trim($_POST['username']))
				{	//$array=mysql_fetch_array($result,MYSQL_NUM)
					//echo "<script language='javascript'>alert('����.$rows.λͬ���û�')��</script>";
					//echo "���ݿ����У�".$rows."λͬ���û�";
					 
					echo "<script language='javascript'>alert('��¼�ɹ�'); window.location.href='baoxiushouye.html';</script>";	
				}
	
				

 
			 else
				{
			
					//echo "<script language='javascript'>alert('��¼�ɹ�'); window.location.href='baoxiushouye.html';</script>";	
				} 
		}
}
//mysql_close();

*/




 /*
 session_start();
if (isset($_SESSION['username']))
{
	echo "��ӭ" . $_SESSION['username']."����¼���������Ϣ����ϵͳ��<br />";
	echo "<br /><a href='Index.html'></a>";
	
}
elseif (array_key_exists('username', $_POST) && 
	array_key_exists('password', $_POST))
{
	$mysqli = new mysqli("localhost", "root", "", "users");
	if ($mysqli->connect_errno)
	{
    		echo "����MySQLʧ��: " . $mysqli->connect_error;
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
		echo "���������û�������";
		echo "<br /><a href='login.htm'>���µ�¼</a>";
	}
}
else
{
	echo <<<EOF
	<form action="login.html" method="post">
	�û���: <input type="text" name="username" /> <br />
	����: <input type="password" name="password" /> <br />
	<input type="submit" value="��¼"/>
	</form>
EOF;
}

 */

?>







