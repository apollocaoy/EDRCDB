<?php /*读取数据库信息*/

    $dsn='mysql:host=localhost;dbname=EDRCDB';
    try{
        $pdo = new PDO($dsn,'root','123');
		echo '<table border="0" cellspacing="0" style="width:950px;font-size:15px">';
        $rs = $pdo->prepare('select 案例编号,案例名称 from `案例标识信息表`');
        $rs->execute();
        $rs = $rs->fetchAll();
		echo '<pre>';
        foreach($rs as $row){
			$title = $row['案例编号'];
			echo '<tr>';
			echo '<td  style="border-bottom:1px;border-bottom-style:dotted">'.'<ul>'.'<li>'.'<a href="DD1view12.php?title='.@$anlibianhao.'">'."【".$row['anlimingcheng']."】".$row['title'].'</a>'.'</li>'.'</ul>'.'</td>';
			echo '<td align="right"  style="border-bottom:1px;border-bottom-style:dotted">'.$row['time'].'</td>';
			echo '</tr>';
		}
		echo '</pre>';
	    echo '</table>';
        $pdo = null;       
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
?> 