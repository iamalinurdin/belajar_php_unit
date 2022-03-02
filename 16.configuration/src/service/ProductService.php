<?php

namespace PHPUnit\Test\Service;

use Exception;
use PHPUnit\Test\Product;
use PHPUnit\Test\Repository\ProductRepository;

class ProductService
{
  private ProductRepository $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function register(Product $product)
  {
    if ($this->productRepository->findById($product->getId()) != null)
    {
      throw new Exception('Product is already exists');
    }

    $this->productRepository->save($product);
  }
}