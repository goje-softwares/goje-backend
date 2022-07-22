<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method create(\App\Http\Requests\API\StoreProductRequest $product)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'amount',
        'weight',
        'status',
        'description'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
