<?php
namespace Empower\DB;

class SqlInterface {
	private function connectToDB()
	{
		
		include './mysql.conf.php';
		
		$mysqli = new mysqli("127.0.0.1", DB_USER, DB_PASSWORD, DB_NAME, 3306);
		
		if (!$mysqli->connect_error) {
			return $mysqli;
		}
		else {
			printf("Database connection failed: ".$mysqli->connect_error);
			return "false";
		}
	}
	
	private function passArrayByReference(&$variable)
	{
		$temp = array();
		
		for($i = 1; $i < count($variable); $i++) {
			$temp[$i-1] = &$variable[$i];
		}
		
		return $temp;
	}

	public function queryDB()
	{
		$numargs = func_num_args();
		$argList = array();
		if($numargs < 1) {
			return false;
		}
		
		$mysqli = connectToDB();
		$args = func_get_args();
		
		$stmt = $mysqli->prepare($args[0]);
		
		if ($numargs >= 2) {
			
			$argDef = $args[1];
			$argList = passArrayByReference($args);
			call_user_func_array(array($stmt, "bind_param"), $argList);
		}
		
		
		$stmt->execute();
		$result = $stmt->get_result();
		$resultArray = array();
		$i = 0;
		
		while($row = $result->fetch_array()) {
			$resultArray[$i] = $row;
			$i++;
		}
		
		$mysqli->close();
		return $result;
	}
}
