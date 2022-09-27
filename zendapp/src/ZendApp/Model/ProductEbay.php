
 <?php
  //Todo: Create one or more subclasses that extend the superclass with constants, properties and methods 
  //todo: specific to the subclass. Instantiate a couple of objects from the subclasses and execute the methods producing some output.

  namespace ZendApp\Model;

  //* Extend the super-class with constants, properties and methods
  class ProductEbay extends Product
  {
    protected string $itemNumber;

    //! id at the end
    public function __construct($sku, $title, $imageUrl, $tags, $description, $quantity, $itemNumber, $id=NULL)
    {
      parent::__construct($sku, $title, $imageUrl, $tags, $description, $quantity, $id);
      $this->itemNumber = $itemNumber;
    }   
    

  }
