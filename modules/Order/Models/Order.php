<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Order\Database\Factories\OrderFactory;

class Order extends Model
{
    use HasFactory;
    const STATUS_PENDING = 'pending';
    const STATUS_PROCESSING = 'processing';

    protected static function newFactory(): OrderFactory
    {
        return OrderFactory::new();
    }
}