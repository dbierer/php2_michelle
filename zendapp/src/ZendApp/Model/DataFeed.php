<?php
class DataFeed
{
  public const ALLOWEDFIELDS = ['Identifier', 'Title', 'Quantity', 'Price', 'Category', 'Booth category', 'Images', 'Description', 'SKU', 'MPN', 'UPC',  'ItemNo'];

  public $vars = [];
  
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
}

$test = new DataFeed();
$test->MPN='AAA-12345';
$test->UPC='08747386384753';
$test->balanceUnexisted=55555.55;

echo $test->MPN;
echo $test->UPC;
echo $test->balanceUnexisted;

