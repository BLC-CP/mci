<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidu extends Model
{
    use HasFactory;
    protected $table = 'pedidus';

    protected $fillable = [
        'id_movimentu',
        'data_registu',
        'dizignasaun_sosial',
        'enderesu',
        'numeru_fiskal',
        'telefone',
        'email',
        'identifikasaun',
        'naran_firma',
        'id_morada',
        'id_karakterizasaun',
        'id_risku',
        'id_atu',
        'aktividade_estabelesimentu',
        'aktividade_prinsipal'
    ];

}
