<?php
#	phpinfo(1|4|8);
	$conn = pg_connect(getenv("DATABASE_URL"));
	echo $conn;
	echo $_ENV['DATABASE_URL'];
?>
