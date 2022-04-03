<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'amount', 
        'description'
    ];


    public function sale (){
        return $this->belongsTo(Sale::class);
    }
    
}
