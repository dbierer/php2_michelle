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

  public function __construct($sku, $title, $imageUrl, $tags, $description, $quantity, $id)
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
    return $this->value ?? null;
  }

  public function __toString()
  {
    return $this->title; //!but how to inherit this?
  }
}


$product1 = new Product('sku1', 'title1', 'image.jpg', 'tag1 tag2', 'description1 description', 1000, 1);

echo $product1; //! will output tostring version