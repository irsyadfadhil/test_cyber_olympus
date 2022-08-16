<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    use HasFactory;
    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'parent_id',
        'icon',
        'icon_web',
        'status',
        'ordering'];
}
