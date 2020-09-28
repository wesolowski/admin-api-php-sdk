<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property int $id 
 * @property string $referenceKey A key that uniquely identifies the variant of a product (usually an SKU) within the tenant's ecosystem.
 * @property SimpleAttribute[]|SimpleAttributeList[]|LocalizedAttribute[]|LocalizedAttributeList[]|AdvancedAttribute[]|AdvancedAttributeList[] $attributes 
 * @property ProductVariantPrice[] $prices 
 */
class ProductVariant extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'prices' => \AboutYou\Cloud\AdminApi\Models\ProductVariantPrice::class,
    ];

    protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
        'attributes' => [
            'discriminator' => 'type',
            'mapping' => [
                    'simple' => \AboutYou\Cloud\AdminApi\Models\SimpleAttribute::class,
                    'simpleList' => \AboutYou\Cloud\AdminApi\Models\SimpleAttributeList::class,
                    'localizedString' => \AboutYou\Cloud\AdminApi\Models\LocalizedAttribute::class,
                    'localizedStringList' => \AboutYou\Cloud\AdminApi\Models\LocalizedAttributeList::class,
                    'advanced' => \AboutYou\Cloud\AdminApi\Models\AdvancedAttribute::class,
                    'advancedList' => \AboutYou\Cloud\AdminApi\Models\AdvancedAttributeList::class,
            ]
        ],
    ];
}