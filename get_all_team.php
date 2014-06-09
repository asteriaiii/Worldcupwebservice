<?php 

require('config/DBConnect.php');

$db=new DBCONNECT();

$result=mysql_query("SELECT * FROM tbcalendar")or die(mysql_error());

if (mysql_num_rows($result)>0) {
	$data['data'] = array();
	while ($row = mysql_fetch_array($result)){
		$test= array();
		$test["calendar_ID"] = $row["calendar_ID"];
		$test["team1_ID"] = $row["team1_ID"];
		$test["team2_ID"] = $row["team2_ID"];
		$test["time_Fight"] = $row["time_Fight"];
		$test["result"] = $row["result"];

		array_push($data['data'],$test);
		//var_dump($test);
	}
	echo json_encode($data);
	
}
?>