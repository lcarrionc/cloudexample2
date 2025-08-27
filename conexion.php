<?php

	function conexion(){

	$host = "host=dpg-d2nmbljipnbc738cen5g-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=exampledbnube2_iayu";
	$user = "user=exampledbnube2_iayu_user";
	$password = "password=grgcmNohJpxOCjwAx11xd1DfLqhlef4n";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>