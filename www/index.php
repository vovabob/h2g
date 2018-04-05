Database connection details:
<?php
#	phpinfo(1|4|8);
	$conn = pg_connect(getenv("DATABASE_URL"));
	echo "<br>" . chr(10); // same as /n
	echo $conn . "<br>\n";
	echo "user:password@host:port/database" . "<br>\n";
	echo $_ENV['DATABASE_URL'] . "<br>\n";
?>
