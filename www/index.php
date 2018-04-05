Database connection details:
<?php
#	phpinfo(1|4|8);
	$conn = pg_connect(getenv("DATABASE_URL"));
	echo \n$conn\n;
	echo "user:password@host:port/database\n";
	echo $_ENV['DATABASE_URL']\n;
?>
