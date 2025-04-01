<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class VariantAttribute extends Pivot
{
    use HasFactory;

    protected $table = 'variant_attributes';

    protected $fillable = ['variant_id', 'attribute_id', 'value'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
}
