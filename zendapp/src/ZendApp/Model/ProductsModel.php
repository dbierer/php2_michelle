<?php

namespace ZendApp\Model;
//Using PHP 8
class ProductsModel
{
  public function __construct(
    protected int $id = null,
    protected string $sku,
    protected string $title,
    protected string $imageUrl,
    protected string $tags,
    protected string $description,
    protected int $quantity,
    
  ) {  }

  protected function getId()
  {
    return $this->id;
  }
  protected function getSku()
  {
    return $this->sku;
  }
  protected function getTitle()
  {
    return $this->title;
  }
  protected function price()
  {
    return $this->price;
  }
  protected function getImageUrl()
  {
    return $this->umageUrl;
  }
  protected function getTags()
  {
    return $this->tags;
  }
  protected function getDescription()
  {
    return $this->description;
  }
  protected function getQuantity()
  {
    return $this->quantity;
  }
}


$product1 = new ProductsModel('')