AppServ�汾��Ϣ������

AppServ 2.5.10
Apache 2.2.8
PHP 5.2.6
MySQL 5.0.51b
phpMyAdmin-2.10.3
Download
Sourceforge.net : http://prdownloads.sourceforge.net/appserv/appserv-win32-2.5.10.exe?download

MD5SUM : 279c0c39866fbecb8a3904969fd5d0f4

AppServ 2.6.0
Apache 2.2.8
PHP 6.0.0-dev
MySQL 6.0.4-alpha
phpMyAdmin-2.10.3
Download
Sourceforge.net : http://prdownloads.sourceforge.net/appserv/appserv-win32-2.6.0.exe?download

MD5SUM : e3a108c9b17f3572e53c07f52d236481


%%%%%@@@@@ϵͳ����@@@@@%%%%%

��װAppServe
�����ַ�����gbk_simplified chinese
enabled��InnoDB �� ��ѡ��Yes��

MySQL��phpMyAdmin
���û���root
�����룺123

%%%%%@@@@@�ַ�������@@@@@%%%%%

��Ӧ�ĸ��ļ��ؼ�������ʾ���£�
[client]

port=3306

[mysql]

default-character-set = gbk

@ �������в鿴�ַ�������

	SHOW variables like "char_%";

@�������в鿴���������

	
	show engines;
	

@�鿴�汾��Ϣ

	select @@version;
		5.0.51b-community-nt-log

%%%%%@@@@@�������ļ�������@@@@@%%%%%%

@����HTML��ҳ�����ΪUTF-8
@����php�ļ�Headerͷ������ΪUTF-8
	header("Content-Type:text/html;charset=utf-8");	
@����MySQL�ַ����ö�Ϊgbk,��MySQLϵͳĬ��ΪUTF-8 
@phpMyAdmin����У��Ϊgbk_ chinese_ci������Ϊgbk_ chinese_ci
@����php�ļ����������ľ仰
	mysql_query("SET NAMES UTF8");//���������ַ���
	mysql_query('set character_set_client = utf8');
	mysql_query('set character_set_connection = GBK');
	mysql_query('set character_set_results = utf8');
@���ݿ�����ΪInnoDB���������Ҳ��InnoDB

[client]

port=3306

[mysql]

default-character-set = gbk

# SERVER SECTION
# ----------------------------------------------------------------------
#
# The following options will be read by the MySQL Server. Make sure that
# you have installed the server correctly (see above) so it reads this 
# file.
#
[mysqld]

# The TCP/IP Port the MySQL Server will listen on
port=3306

#Path to installation directory. All paths are usually resolved relative to this.
basedir="A:\AppServ/MySQL"

#Path to the database root
datadir="A:\AppServ/MySQL/data/"

# The default character set that will be used when a new schema or table is
# created and no character set is defined
default-character-set = gbk
character-set-server = gbk
collation-server = gbk_chinese_ci
init_connect = 'SET collation_connection = gbk_chinese_ci'
init_connect = 'SET NAMES gbk'

# The default storage engine that will be used when create new tables when
#default-storage-engine=INNODB

@@@@@@%%%%%%phpMyAdmin�ַ���@@@@@@%%%%%%

ALTER DATABASE `caoyong` DEFAULT CHARACTER SET gb2312 COLLATE gb2312_chinese_ci;