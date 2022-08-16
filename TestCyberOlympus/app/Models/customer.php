<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
    'referral_id',
    'address',
    'kelurahan',
    'kecamatan',
    'kota',
    'provinsi',
    'kode_pos',
    'latitude',
    'longitude',
    'no_rekening',
    'buku_rekening',
    'point',
    'default_address'];
}
