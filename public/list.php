
<?php
try {
  $pdo = new PDO('mysql:host=db4free.net;dbname=vovabobdb;port=3306;charset=utf8', 'vovabobuser', 'v1o2v3a4');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'SELECT `joketext` FROM `joke`';
  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {
     $jokes[] = $row['joketext'];
  }
}
catch (PDOException $e) {
  $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}
include  __DIR__ . '/../templates/list.html.php';
