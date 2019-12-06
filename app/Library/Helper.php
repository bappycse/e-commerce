<?php

namespace App\Library;

class Helper
{

    public static function allData($productArr)
    {
        $products = [];

        foreach ($productArr as $productItem) {
            $product = resolve('App\BusinessObjects\IProduct');

            $product->setId($productItem['id']);
            $product->setName($productItem['name']);
            $product->setSku($productItem['sku']);
            $product->setPrice($productItem['price']);
            $product->setDiscount($productItem['discount']);
            $product->setCategory($productItem['category']);

            $products[] = $product;
        }

        return $products;
    }

    public static function catAllData($catArr)
    {
        $categories = [];
        foreach($catArr as $catItem){
            $category = resolve('App\BusinessObjects\ICategory');

            $category->setId($catItem['id']);
            $category->setName($catItem['name']);

            $categories[]= $category;
        }

        return $categories;
        
    }
}