<?php
// Get POST body content
$url = "http://localhost/UPload/e.txt";
$content = file_get_contents($url);
// Parse JSON
$events = json_decode($content, true);

echo $events['one'];