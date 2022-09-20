
 <?php
  //TOdo Create one or more subclasses that extend the superclass with constants, properties and methods specific to the subclass. Instantiate a couple of objects from the subclasses and execute the methods producing some output.

  namespace ZendApp\Model;

  //* Extend the superclass with constants, properties and methods
  class ProductEbay extends Product
  {
    protected string $itemAuctionNumber;

    public function __construct(
      $sku,
      $title,
      $imageUrl,
      $tags,
      $description,
      $quantity,
      $id,
      $itemAuctionNumber
    ) {

      parent::__construct(
        $sku,
        $title,
        $imageUrl,
        $tags,
        $description,
        $quantity,
        $id
      );

      $this->itemAuctionNumber = $itemAuctionNumber;
    }

    public function __get($value)
    {
      return $this->value ?? null;
    }
  }
