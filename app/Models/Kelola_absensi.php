<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelola_absensi extends Model
{
    use HasFactory;

    protected $table = 'kelola_absensi';

    protected $fillable = [
        'date',
        'check_in_time',
        'check_out_time',
    ];

    protected $primaryKey = 'id';

    public function getKelolaAbsensi()
    {
        return Kelola_absensi::all();
    }

    public function setKelolaAbsensi($data)
    {
        return Kelola_absensi::create($data);
    }

    public function deleteKelolaAbsensi($id)
    {
        return Kelola_absensi::find($id)->delete();
    }

    public function getKelolaAbsensiById($id)
    {
        return Kelola_absensi::where('id', $id)->first();
    }

    public function getKelolaAbsensiLastFirst()
    {
        return Kelola_absensi::latest()->first();
    }
}
