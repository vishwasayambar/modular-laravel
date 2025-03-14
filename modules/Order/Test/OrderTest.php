<?php

namespace Modules\Order\Test;

use Modules\Order\Models\Order;
use Tests\TestCase;

class OrderTest extends TestCase
{

    public function test_it_create_a_order()
    {
        $order = new Order();
        dd($order);
    }
}