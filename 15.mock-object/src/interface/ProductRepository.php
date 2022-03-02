<?php

namespace PHPUnit\Test\Repository;

use PHPUnit\Test\Product;

interface ProductRepository
{
  public function save(Product $product);
  
  public function delete(Product $product); 
  
  public function findById(string $id) : ?Product;
  
  public function findAll() : array;
}