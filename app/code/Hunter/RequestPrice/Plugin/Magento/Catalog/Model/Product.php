<?php
namespace Hunter\RequestPrice\Plugin\Magento\Catalog\Model;

use Magento\Catalog\Model\Product as CatalogProduct;

class Product {

	public function afterIsSaleable(CatalogProduct $product)
	{
		return [];
	}
}