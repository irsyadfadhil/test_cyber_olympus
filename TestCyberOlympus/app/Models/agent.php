<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    use HasFactory;
    protected $table = 'agents';
    protected $primaryKey = 'id';
    protected $fillable = [
    'store_name',
    'partner_id',
    'pin_lock',
    'store_open',
    'store_close',
    'address',
    'kelurahan',
    'kecamatan',
    'kota',
    'provinsi',
    'kode_pos',
    'latitude',
    'longitude',
    'ktp',
    'npwp',
    'no_rekening',
    'buku_rekening',
    'point',
    'credit_limit',
    'subscription',
    'max_load',
    'default_agent'];
}
