<?php
// tODO Using the code created in the previous exercise, create an extensible superclass definition. Set the properties and methods that subclasses will need. 

namespace ZendApp\Model;

//* Extensible superclass definition
class Product
{
  public const error1 = "This is an error";

  //* add data types in the constructor --
  //! where to add the default value when inheriting?? at the end?

  public function __construct(
    protected string $sku,
    protected string $title,
    protected string $imageUrl,
    protected string $tags,
    protected string $description,
    protected int $quantity,
    protected int $id = null
  ) {
  }

  public function __get($value) //!don't have to add this to the subclass
  {
    return $this->$value ?? null; //* $ dollar sign to the right of arrow 
  }

  public function __toString()
  {
    return $this->title; //!this will be inherited
  }

  public function getInfo() :string  
  {
    return "SKU:" . $this->sku . ' Title: ' . $this->title;
  }
}


$product1 = new Product('sku1', 'title1', 'image.jpg', 'tag1 tag2', 'description1 description', 1000, 1);
echo $product1; //! will output tostring version