<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminReser extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'judul',
        'isi',
    ];
}
