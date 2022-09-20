<?php
// tODO Using the code created in the previous exercise, create an extensible superclass definition. Set the properties and methods that subclasses will need.Create one or more subclasses that extend the superclass with constants, properties and methods specific to the subclass.Instantiate a couple of objects from the subclasses and execute the methods producing some output.Lab complete.*

namespace ZendApp\Model;
//Using PHP 8 Constructor promotion
class ProductOLD
{

  public const LEVEL = 'MAIN'; // * put constants here

  public function __construct(
    protected string $sku,
    protected string $title,
    protected string $imageUrl,
    protected string $tags,
    protected string $description,
    protected int $quantity,
    protected int $id = null //Make the default prop's last    
  ) {
  }

  // ! no need for all these gets if using the __get constructor

  public function __get($value)
  {
    return $this->value ?? null;
  }
  // public function getId()  // {
  //   return $this->id;
  // }
  // public function getSku()  // {
  //   return $this->sku;
  // }
  // public function getTitle()  // {
  //   return $this->title;
  // }
  // public function getPrice()  // {
  //   return $this->price;
  // }
  // public function getImageUrl()  // {
  //   return $this->umageUrl;
  // }
  // public function getTags()  // {
  //   return $this->tags;
  // }
  // public function getDescription()  // {
  //   return $this->description;
  // }
  // public function getQuantity()  // {
  //   return $this->quantity;
  // } 
}


$product1 = new Product('1', '1', '1', '1', '1', '1', 1);
