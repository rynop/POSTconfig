<?php
/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * driver => The name of a supported driver; valid options are as follows:
 *		Database/Mysql 		- MySQL 4 & 5,
 *		Database/Sqlite		- SQLite (PHP5 only),
 *		Database/Postgres	- PostgreSQL 7 and higher,
 *		Database/Sqlserver	- Microsoft SQL Server 2005 and higher
 *
 * You can add custom database drivers (or override existing drivers) by adding the
 * appropriate file to app/Model/Datasource/Database.  Drivers should be named 'MyDriver.php',
 *
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * host =>
 * the host you connect to the database. To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database.  This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres specifies which schema you would like to use the tables in. Postgres defaults to 'public'.
 *
 * encoding =>
 * For MySQL, Postgres specifies the character encoding to use when connecting to the
 * database. Uses database default not specified.
 *
 * unix_socket =>
 * For MySQL to connect via socket specify the `unix_socket` parameter instead of `host` and `port`
 */
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'post_config_test',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'post_config_test',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
