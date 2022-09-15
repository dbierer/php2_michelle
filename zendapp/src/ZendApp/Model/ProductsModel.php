<?php

namespace ZendApp\Model;
//Using PHP 8
class ProductsModel
{
  public function __construct(
   
    protected string $sku,
    protected string $title,
    protected string $imageUrl,
    protected string $tags,
    protected string $description,
    protected int $quantity,
    protected int $id = null //Make the default ones last    
  ) { }

  public function getId()
  {
    return $this->id;
  }
  public function getSku()
  {
    return $this->sku;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getImageUrl()
  {
    return $this->umageUrl;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getQuantity()
  {
    return $this->quantity;
  }
}


$product1 = new ProductsModel('');