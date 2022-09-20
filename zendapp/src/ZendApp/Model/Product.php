<?php
// tODO Using the code created in the previous exercise, create an extensible superclass definition. Set the properties and methods that subclasses will need. 

namespace ZendApp\Model;

//* Extensible superclass definition
class Product
{
  protected string $sku;
  protected string $title;
  protected string $imageUrl;
  protected string $tags;
  protected string $description;
  protected int $quantity;
  protected int $id = null;


  // ! should add in the data types in the constructor --
  public function __construct(string $sku, string $title, string $imageUrl, 
  string $tags, string $description, int $quantity, int $id=null)
  {
    $this->sku = $sku;
    $this->title = $title;
    $this->imageUrl = $imageUrl;
    $this->tags = $tags;
    $this->description = $description;
    $this->quantity = $quantity;
    $this->id = $id;
  }

  public function __get($value)
  {
    return $this->$value ?? null; //! -- add the $ dollar sign to the right of arrow -> value
  }

  public function __toString()
  {
    return $this->title; //!but how to inherit this?
  }
}


$product1 = new Product('sku1', 'title1', 'image.jpg', 'tag1 tag2', 'description1 description', 1000, 1);

echo $product1; //! will output tostring version