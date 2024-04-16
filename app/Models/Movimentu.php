<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentu extends Model
{
    use HasFactory;
    protected $table = 'movimentus';
    protected $fillable = [
        'nrn_movimentu'
    ];
}
