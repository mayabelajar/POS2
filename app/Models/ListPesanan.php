<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPesanan extends Model
{
    use HasFactory;

    protected $table = "pemesanans";
    protected $fillable = [
        'qty',
        'total',
    ];
    
}
