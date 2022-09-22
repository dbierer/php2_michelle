<?php
// tODO Using the code created in the previous exercise, create an extensible superclass definition. Set the properties and methods that subclasses will need. 

namespace ZendApp\Model;

interface IProduct
{
  public const error1 = "This is an error"; //! do we put the const in the interface definition

  //! add the default value at end
  public function __construct(
    protected string $sku,
    protected string $title,
    protected string $imageUrl,
    protected string $tags,
    protected string $description,
    protected int $quantity,
    protected int $id = null
  );
  public function __get($value);  //! put magic methods? in the interface definition?
  public function __toString();

  public function getInfo(): string;
}
