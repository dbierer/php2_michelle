
 <?php
  //TOdo Create one or more subclasses that extend the superclass with constants, properties and methods specific to the subclass. Instantiate a couple of objects from the subclasses and execute the methods producing some output.

  namespace ZendApp\Model;

  //* Extend the superclass with constants, properties and methods
  class ProductAmazon extends Product
  {
    protected string $asin;

    public function __construct($sku, $title, $imageUrl, $tags, $description, $quantity, $id, $asin)
    {
      parent::__construct($sku, $title, $imageUrl, $tags, $description, $quantity, $id);
      $this->asin = $asin;
    }

    public function __get($value)
    {
      return $this->value ?? null;
    }
 
  }
