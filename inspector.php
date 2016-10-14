<?php
/*
 *  A little bit of Memcached info
 *
 *  http://lzone.de/cheat-sheet/memcached
 *  http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/CacheMetrics.Memcached.html
 */
require __DIR__.'/vendor/autoload.php';

echo "<h3>Tiny Memcached Inspector</h3>";

$m = new Memcached;
$server = '127.0.0.1';
$port = 11211;
$serverAndPort = $server . ":" . $port;

$m->addServers(array(
    array($server, $port)
    ));


$stats = $m->getStats()[$serverAndPort];
$allKeys = $m->getAllKeys();

foreach ($allKeys as $value) {
	echo "<p>KEY: " . $value . "</p>";
	dump($m->get($value));
}

echo "<h3>Stats</h3>";
dump($stats);
