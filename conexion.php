<?php

	function conexion(){

	$host = "dpg-d2nmbljipnbc738cen5g-a.oregon-postgres.render.com";
	$port = "5432";
	$dbname = "exampledbnube2_iayu";
	$user = "exampledbnube2_iayu_user";
	$password = "grgcmNohJpxOCjwAx11xd1DfLqhlef4n";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>