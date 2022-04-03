<?php

namespace App\Models;

use App\Models\Sale;
use App\Models\Order;
use App\Models\TyreSize;
use App\Models\TyreType;
use App\Models\TyreModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 
        'type', 
        'size', 
        'year_of_production',
        'description',
        'quantity',
        'purchase_price',
        'sale_price'
    ];

    public function sales() {
        return $this->hasMany(Sale::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }



}
