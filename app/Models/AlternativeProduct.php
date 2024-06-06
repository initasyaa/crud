<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativeProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'product_name',
        'brand_name',
        'description',
        'type_id'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function productBoikot()
    {
        // return $this->belongsTo(ProductBoikot::class);
        //return $this->belongsTo(ProductBoikot::class, 'alternative_id')->whereNotNull('alternative_id');
        //return $this->belongsToMany(ProductBoikot::class);

        return $this->hasMany(ProductBoikot::class, 'alternative_id');
    }
}