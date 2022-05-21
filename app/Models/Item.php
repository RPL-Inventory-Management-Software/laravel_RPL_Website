<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    public $table = "item";
    use HasFactory;

    protected $fillable = [
        'name_item', 'username', 'brand_item', 'quantity_item', 'type_item', 'description_item'
    ];
}
