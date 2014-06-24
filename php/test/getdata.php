<?php
	echo "姓名:".$_POST['USR_name']."<br>";
	echo "姓名:".$_REQUEST['USR_name']."<br>";
	echo "ID:".$_POST['USR_ID']."<br>";
	echo "生日:".$_POST['birthY']."年".$_POST['birthM']."月".$_POST['birthD']."日<br>";
	echo "家用電話:".$_POST['tel_ph']."<br>";
	echo "手機:".$_POST['cel_ph']."<br>";
	echo "工作".$_POST['work']."<br>";
	echo $_POST['test']."<br>";
	echo $_GET['test']."<br>";

	$birth_dt = $_POST['birthY']."/".$_POST['birthM']."/".$_POST['birthD'];

	//$link = @mysql_connect("127.0.0.1","root","0621")  or die("連結資料庫失敗".mysql_error());
	echo "連結資料庫成功!!";

	/*$sql = "insert into TRBASIC (PERSON_ID,PERSON_NM,BIRTH_DT,TEL_PHONE,CELL_PHONE,WORK) values ('".$_POST['USR_ID']."','".$_POST['USR_name']."','".$birth_dt."','".$_POST['tel_ph']."','".$_POST['cel_ph']."','".$_POST['work']."')";
	echo $sql;
	mysql_select_db('person_file') or die("db error");
	mysql_query("SET NAMES 'utf8'");	
	mysql_query($sql,$link) or die('Insert data fail');		

	mysql_close($link);*/
?>