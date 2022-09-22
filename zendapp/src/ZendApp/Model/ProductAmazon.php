
 <?php
  //TOdo Create one or more subclasses that extend the superclass with constants, properties and methods specific to the subclass. Instantiate a couple of objects from the subclasses and execute the methods producing some output.

  namespace ZendApp\Model;

  //* Extend the superclass with constants, properties and methods
  class ProductAmazon extends Product
  {
    protected string $asin;

    //! does the id go there or at the end
    public function __construct($sku, $title, $imageUrl, $tags, $description, $quantity, $id=null, $asin)
    {
      parent::__construct($sku, $title, $imageUrl, $tags, $description, $quantity, $id);
      $this->asin = $asin;
    }

    
    //inherited will send the title here and dont need ghe get here

  }
