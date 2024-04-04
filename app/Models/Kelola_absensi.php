<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelola_absensi extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'kelola_absensi';

    protected $fillable = [
        'date',
        'check_in_time',
        'check_out_time',
    ];

    protected $primaryKey = 'id';
}
