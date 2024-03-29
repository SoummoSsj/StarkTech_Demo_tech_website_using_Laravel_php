<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cart extends Model
{
 

    use HasFactory;
    protected $table = 'carts';


    protected $fillable = ['user_id', 'product_id','laptop_id' ,'quantity'];

    // ...

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function laptop(): BelongsTo
    {
        return $this->belongsTo(laptop::class);
    }
}
