<?php

namespace Modules\Product\Test;

use JetBrains\PhpStorm\NoReturn;
use Modules\Product\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{

    #[NoReturn] public function test_it_create_a_product()
    {
        $order = new Product();
        $this->assertInstanceOf(Product::class, $order);
    }
}