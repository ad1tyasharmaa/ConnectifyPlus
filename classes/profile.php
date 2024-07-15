<?php

Class Profile
{
	function get_profile($id)
	{
		$DB = new Database();
		$query = "SELECT * FROM users WHERE userid = '$id' LIMIT 1";
		$data = $DB->read($query);
		return $data;

	}
}
?>