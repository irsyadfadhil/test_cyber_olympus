<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'invoice_id',
        'customer_id',
        'name',
        'phone',
        'address',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'latitude',
        'longitude',
        'agent_id',
        'agent_name',
        'payment_method',
        'payment_link',
        'payment_date',
        'buy_by',
        'payment_total',
        'coupon_id',
        'payment_discount_code',
        'payment_discount',
        'payment_final',
        'order_weight',
        'order_distance',
        'delivery_status',
        'delivery_fee',
        'delivery_track',
        'delivery_time',
        'delivery_date',
        'order_time',
        'status'];

    public function user()
    {
        return $this->belongsTo(data_user::class, 'customer_id','id');
    }

    public function agents()
    {
        return $this->belongsTo(agent::class, 'agent_id','id');
    }

    public function detail_orders()
    {
        return $this->belongsTo(order_detail::class, 'id','order_id');
    }
}
