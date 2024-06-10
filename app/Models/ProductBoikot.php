<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBoikot extends Model
{
    use HasFactory;

    protected $fillable = [
        'alternative_id',
        'code',
        'product_name',
        'brand_name',
        'status',
        'description',
        'type_id',
        'image',
        'halal_certificate_number',
        'bpom_certificate_number',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function alternativeProduct()
    {
        // return $this->hasMany(AlternativeProduct::class);
        return $this->belongsTo(AlternativeProduct::class, 'alternative_id');
    }
}
