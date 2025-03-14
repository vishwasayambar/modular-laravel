<?php

use Modules\Order\Models\Order;

it('can create an instance of Order', function () {
    $order = new Order();
    $this->assertInstanceOf(Order::class, $order);
});