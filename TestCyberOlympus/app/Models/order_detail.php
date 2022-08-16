<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $fillable = [
    'product_id',
    'order_id',
    'price',
    'price_agent',
    'qty',
    'total_price'];

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id','id');
    }
}
