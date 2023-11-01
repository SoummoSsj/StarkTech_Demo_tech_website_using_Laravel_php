<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{

    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['id','name','type', 'price','brand','image','DisplaySize', 'DisplayType', 'PanelType', 'Resolution', 'AspectRatio', 'ViewingAngle', 'Brightness', 'ContrastRatio', 'RefreshRate', 'ColorSupport', 'ColorGamut', 'ResponseTime', 'FlickerFree', 'Speaker(Built In)', 'Connectivity', 'Color', 'Dimension', 'Weight', 'Voltage', 'Warranty'];
    public function carts(): HasMany
{
    return $this->hasMany(Cart::class);
}
}
