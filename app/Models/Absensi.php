<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    protected $fillable = [
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

    public function getAbsensiByDate($date)
    {

        return Absensi::where('date', $date)
            ->join('guests', 'absensi.id_guests', '=', 'guests.id')
            ->get();
    }
    public function getGuestAbsensiHadir()
    {
        return Absensi::where('status', 'hadir')->count();
    }
}
