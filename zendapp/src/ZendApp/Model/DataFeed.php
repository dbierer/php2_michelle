<?php
namespace ZendApp\Model;

use PDO;
use Exception;
use Throwable;
class DataFeed
{
	public const ERR_DB = 'ERROR: unable to connect to the database';
	public const ALLOWEDFIELDS = ['Identifier', 'Title', 'Quantity', 'Price', 'Category', 'Booth category', 'Images', 'Description', 'SKU', 'MPN', 'UPC',  'ItemNo'];
	public const DSN = '';
	public $vars = [];
	public $pdo = NULL;
	public function __construct(array $config)
	{
		// alternatively
		/*
		 $dsn = $config['db']['dsn'] ?? self::DSN;
		 $usr = $config['db']['usr'];
		 $pwd = $config['db']['pwd'];
		 $opts = $config['db']['opts'] ?? [];
		 */
		['dsn' => $dsn, 'usr' => $usr, 'pwd' => $pwd, 'opts' => $opts] = $config['db'];
		try {
			$this->pdo = new PDO($dsn, $usr, $pwd, $opts);
		} catch (Throwable $t) {
			error_log(__METHOD__ . ':' . $t->getMessage() . ':' . $t->getTraceAsString());
			throw new Exception(self::ERR_DB);
		}
	}
	public function __set($key, $value)
	{
		if (in_array($key, self::ALLOWEDFIELDS)) {
		  $this->vars[$key] = $value;
		}
	}
	public function __get($key)
	{
		return $this->vars[$key] ?? '';
	}
	// from this point start defining use database-related methods:
	//  e.g. findById($id); findAll() etc.
}

