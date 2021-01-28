<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
class MojModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'zklj';
    protected $keyType = 'string';

    protected $fillable = [
        'zklj',
        'Ime',
        'Prezime'
    ];

    protected $hidden = [
        'Broj'
    ];
}
