<?php 
/**
* 
*/
class DBCONNECT
{
	
	function __construct()
	{
		$this->connect();
	}

	function __destruct() {
        // closing db connection
		$this->close();
	}

	function connect()
	{
		require_once dirname(__FILE__) . '/DBConfig.php';
		$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

		$selected = mysql_select_db(DB_DATABASE, $con)
		or die(mysql_error()); 

		
		return $con;
	}

	function close() {
        // closing db connection
		mysql_close();
	}

}

?>