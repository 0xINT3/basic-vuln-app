<?php

require_once('../_helpers/strip.php');
$db = new sqlite3('test.db');

$homepage = file_get_contents("index.html"); 
echo $homepage; 
if (strlen($_GET['id']) < 1) {
  echo 'Usage: ?id=1';
} else {
  $query = $db->query('select * from secrets where id = ' . $_GET['id']);
  while ($row = $query->fetchArray()) {
    echo $row['secret'];
  }
}

