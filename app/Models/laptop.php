<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class laptop extends Model
{
    use HasFactory;
    protected $table = 'laptop';

    protected $fillable = [
        'id',
        'Name',
        'price',
        'type',
        'image',
        'ProcessorBrand',
        'ProcessorModel',
        'Generation',
        'ProcessorFrequency',
        'ProcessorThread',
        'CPUCache',
        'ChipsetModel',
        'DisplaySize',
        'DisplayType',
        'Resolution',
        'TouchScreen',
        'RefreshRate',
        'Features',
        'Ram',
        'RamType',
        'MaxRamCap',
        'StorageType',
        'StorageCap',
        'Extraslot',
        'SSD',
        'GPU',
        'Keyboard',
        'Touchpad',
        'Camera',
        'Ports',
        'Connectivity',
        'OS',
        'Fingerprint',
        'Dimension',
        'Weight',
        'Warranty'
    ];
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
