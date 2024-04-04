<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    use HasFactory;

    protected $table = 'guests';

    protected $fillable = ['nama_lengkap', 'delegasi', 'qr_code'];

    protected $primaryKey = 'id';

    public function GetGuests()
    {
        return Guests::all();
    }

    public function setGuests($data)
    {
        return Guests::create($data);
    }

    public function deleteGuests($id)
    {
        return Guests::find($id)->delete();
    }

    public function getGuestsById($id)
    {
        return Guests::find($id);
    }
}
