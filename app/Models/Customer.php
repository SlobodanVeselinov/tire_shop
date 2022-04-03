<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;
use App\Models\Payment;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'adress',
        'city',
        'country', 
        'email', 
        'phone'
    ];

    public function sales() {
        return $this->hasMany(Sale::class);
    }

    public function payments(){
        return $this->hasManyThrough(Payment::class, Sale::class);
    }

}
