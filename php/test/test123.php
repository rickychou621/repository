<?php
	$link = @mysql_connect("127.0.0.1","root","0621")  or die("�s����Ʈw����".mysql_error());
	echo "�s����Ʈw���\!!";

	$tmpsql = "select PERSON_ID from TRBASIC order by PERSON_ID desc limit 2";
	$result = mysql_db_query(person_file, $tmpsql,$link);
	$data=mysql_fetch_array($result);
	$id = $data['PERSON_ID'] + 1;

?>



<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<form name="FORM1" action = "getdata.php?test=test" method="post">
<table>
	<tr>
		<td>
			�s��:<input id="USR_ID" name="USR_ID" type="text" readonly value="<?php echo $id; ?>">
		</td>	
	</tr>
	<tr>
		<td>
			�m�W:<input id="USR_name" name="USR_name" type="text">
		</td>
	</tr>
	<tr>
		<td>
			�ͤ�:
			<select id="birthY" name="birthY">
			<?php
				$tmpcount = 1970;
				$year = 0;
				for($i=1;$i<=30;$i++){
				$year = $tmpcount+$i;
			?>
				<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
			<?php
				}
			?>	
			</select>&nbsp;�~
			<select id="birthM" name="birthM">
			<?php
				for($i=1;$i<=12;$i++){
					echo "<option value='".$i."'>".$i."</option>";
				}
			?>
			</select>&nbsp;��
			<select id="birthD" name="birthD">
			<?php
				for($i=1;$i<=30;$i++){
					echo "<option value='".$i."''>".$i."</option>"	;
				}
			?>	
			</select>&nbsp;��	
		</td>
	</tr>
	<tr>
		<td>
			�a�ιq��:<input type="text" id="tel_ph" name="tel_ph">
		</td>
	</tr>
	<tr>
		<td>
			���:<input type="text" id="cel_ph" name="cel_ph">
		</td>
	</tr>
	<tr>
		<td>
			�u�@:
			<select id="work" name="work">
			<?php
				$sql = "select * from TRWORK";
				mysql_select_db('person_file') or die("db error");
				mysql_query("SET NAMES 'utf8'");
				$result = mysql_db_query(person_file, $sql,$link);

				while($data=mysql_fetch_array($result)){
					echo "<option value='".$data['WORK_ID']."'>".$data['WORK_NM']."</option>";
				}
			?>	
			</select>		
		</td>
	</tr>

	<tr>
		<td><input type="submit" value="�e�X"></td>
	</tr>

</table>
</form>
</body>
</html>
<?php
	mysql_close($link);
?>