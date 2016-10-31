<?php
	$a = $_POST['text'];
	// var_dump($a);
	if ($a != '') {
		echo '好好学习，天天向上！！！';
	}else{
		// echo '来了不写点什么么？？？';
		echo "<script>alert('来了不写点什么么？？？');window.location.href='../index.php'</script>";
		exit;
	}

	require("./config.php");
	$link=@mysql_connect(HOST,USER,PASS) or die("数据库链接失败！");

        mysql_select_db(DBNAME);
        mysql_set_charset(CHARSET);

        $sql = "insert into g17 (id,text) values(null,'{$a}');";
        // var_dump($sql);
        $res = mysql_query($sql,$link);
        // var_dump($res);die;

?>