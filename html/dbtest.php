<?php
$db = new PDO('mysql:host=mysql;dbname=dbtest', 'root', 'pass');
$db->query("INSERT INTO test (name) VALUES('DB接続テスト')");
$st = $db->query("SELECT * FROM test");
print_r($st->fetchAll());
