<?php
//$pdo = new PDO('mysql:host=localhost;dbname=ijdb_sample;charset=utf8', 'ijdb_sample', 'mypassword');
$pdo = new PDO('mysql:host=db4free.net;dbname=vovabobdb;port=3306;charset=utf8', 'vovabobuser', 'v1o2v3a4');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
