<?php

namespace Modules\Product\Test;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use JetBrains\PhpStorm\NoReturn;
use Modules\Product\Database\Factories\ProductFactory;
use Modules\Product\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use DatabaseMigrations;

    #[NoReturn] public function test_it_create_a_product()
    {
        $product = ProductFactory::new()->create();
        $this->assertInstanceOf(Product::class, $product);
    }
}