<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'category',
        'type',
        'item',
        'weight',
        'sku',
        'price_sell',
        'price_promo',
        'price_agent',
        'photo',
        'recommendation',
        'description',
        'status',
        'ordering'];

}
