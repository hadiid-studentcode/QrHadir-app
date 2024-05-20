<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    protected $fillable = [
        'kode_absensi',
        'id_guests',
        'date',
        'time',
        'status',
    ];

    protected $primaryKey = 'id';

    public function setAbsensi($data)
    {

        return Absensi::create($data);
    }

    public function getAbsensiByDate($date, $time_in, $time_out)
    {

        return DB::table('absensi')
        ->where('date', '=', $date)
        ->whereBetween('time', [$time_in, $time_out])
        ->join('guests', 'absensi.id_guests', '=', 'guests.id')
        ->get();
            
    }

    public function getGuestAbsensiHadir()
    {
        return Absensi::where('status', 'hadir')->count();
    }
}
