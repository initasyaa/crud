<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'alternative_id',
        'code',
        'product_name',
        'brand_name',
        'status',
        'description',
        'type_id'
    ];

    public function AlternativeProduct()
    {
        return $this->hasMany(AlternativeProduct::class);
    }

    public function ProductBoikot()
    {
        return $this->hasMany(ProductBoikot::class);
    }
}
