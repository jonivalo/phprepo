<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

$db = new PDO('mysql:host=localhost;dbname=todo;charset=utf8','root','');
$sql = "select * from task";
$query = $db->query($sql);
$results = $query->fetchALL(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
print json_encode($results);