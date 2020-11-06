<?php

require 'DBConnection/DBConnection.php';
require 'DBConnection/MySQLConnection.php';
require 'DBConnection/PostgreConnection.php';
require 'DBConnection/OracleConnection.php';

require 'DBRecord/DBRecord.php';
require 'DBRecord/MySQLRecord.php';
require 'DBRecord/PostgreRecord.php';
require 'DBRecord/OracleRecord.php';

require 'DBQueryBuilder/DBQueryBuilder.php';
require 'DBQueryBuilder/MySQLDBQueryBuilder.php';
require 'DBQueryBuilder/PostgreQueryBuilder.php';
require 'DBQueryBuilder/OracleQueryBuilder.php';

require 'DBFactory/DBFactory.php';
require 'DBFactory/MySQLFactory.php';
require 'DBFactory/PostgreSQLFactory.php';
require 'DBFactory/OracleFactory.php';


$db = new MySQLFactory();
//$db = new PostgreSQLFactory();
//$db = new OracleFactory();

$config = ['dbname' => 'myDataBase'];
$params = ['id' => 123, 'name' => 'test row'];
$db->connect($config);
$db->insert($params);
$db->select($params);
$db->update($params);
$db->delete($params);
$db->dump($config);
