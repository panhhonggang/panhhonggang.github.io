<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		
		<h3>我来看一看</h3>

		<table width="800" border="1" id="main-tab"> 
			<tr>
							
				<th><font color="red">ID</font></th>
				<th><font color="red">内容</font></th>
				
			</tr>
<?php
	require("./config.php");

  $link=@mysql_connect(HOST,USER,PASS) or die("数据库链接失败！");

        mysql_select_db(DBNAME);
        mysql_set_charset(CHARSET);

        $lsql = "select * from g17";
        //var_dump($lsql);die;
        $lres = mysql_query($lsql,$link);
        //var_dump($lres);die;
       
        while($lrow = mysql_fetch_assoc($lres)){

            echo "<tr>";
            echo "<td>&nbsp;&nbsp;{$lrow['id']}</td>";
            echo "<td>&nbsp;&nbsp;{$lrow['text']}</td>";
            echo "</tr>";
        


        }
        
?>
		</table>

	</center>
</body>
</html>