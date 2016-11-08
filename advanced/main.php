<?php

require_once('./Classes.php');

use App\Computer;
use App\Workstation as WorkStation;
use App\Mac;
use App\Pc as PC;
use App\Server;
use App\WebServer;
use App\DatabaseServer;


$computer = new Computer(['a','b'], 15);
$computer->getClass();

$workstation = new WorkStation(['a','c'], 19);
$workstation->getKeys();
$workstation->getKeys(['d','e']);

$strategy = 'var_dump';

$computer->addToContainer('getKeys', function() use ($strategy) {
	 $strategy(['a','b']);
});

$computer->makeFromContainer('getKeys');

$mac = new Mac(['a','b','c'], 15, 'Thomas');
$mac->getOwner();

$server = new Server(['a','c'], 19, 'linux', ['.php','.rb']);

$webServer = new WebServer(['a','c'], 19, 'linux', ['.html','.js']);

$databaseServer = new DatabaseServer(['a','c'], 19, 'linux', ['.sql']);


$databaseServer->addToContainer('getKeys', function() {

	$string_format = 'strtoupper';
	
	return array_map(function($item) use ($string_format) {
	 	return $string_format($item);
	},['a','b']);
});

$array = ['c','d'];

$databaseServer->pipeToFunction('getKeys', function($data) use ($array) {
	var_dump(array_merge($data,$array));
});




