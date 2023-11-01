<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class components extends Model
{
    use HasFactory;

    protected $table = 'components';

    protected $fillable=[
        'Name',
        'Brand',
        'type',
        'price', 
        'generation',
        'Speed',
        'Cores',
        'Threads',
        'Size',
        'Memory',
        'tyype'
        
    ];
}
