<?php

namespace AboutYou\Cloud\AdminApi\Models;

class ProductImageCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \AboutYou\Cloud\AdminApi\Models\ProductImage::class,
    ];

    /**
    * @return \AboutYou\Cloud\AdminApi\Models\ProductImage[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}