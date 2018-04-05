Database connection details:
<?php
#	phpinfo(1|4|8);
	$conn = pg_connect(getenv("DATABASE_URL"));
	echo chr(10); // same as /n
	echo $conn . "\n";
	echo "user:password@host:port/database\n";
	echo $_ENV['DATABASE_URL'] . "\n";
?>
