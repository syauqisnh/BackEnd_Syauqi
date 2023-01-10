<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    protected $tabel = "penumpang";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama', 'alamat', 'umur'
    ];

}
