<?php

namespace App\Exports;

use App\Models\Absensi;
use App\Models\Kelola_absensi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Absensiexport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $date;
    protected $check_in_time;
    protected $check_out_time;

    public function __construct($date, $check_in_time, $check_out_time)
    {
        $this->date = $date;
        $this->check_in_time = $check_in_time;
        $this->check_out_time = $check_out_time;
    }

    public function collection()
    {
       

        


        $kelolaAbsensi = new Absensi();

        $dataAbsensi = $kelolaAbsensi->getAbsensiByDate($this->date, $this->check_in_time, $this->check_out_time);


        return $dataAbsensi;
    }
    public function map($absensi): array
    {
        return [
            $absensi->id,
            $absensi->kode_absensi,
            $absensi->nama_customer,
            $absensi->kota,
            $absensi->segmen,
            $absensi->date,
            $absensi->time,
            $absensi->qr_code,
            $absensi->created_at,
            $absensi->updated_at,
        ];
    }
    public function headings(): array
    {
        return [
            '#',
            'kode_absensi',
            'nama_customer',
            'kota',
            'segmen',
            'date',
            'time',
            'qr_code',
            'created_at',
            'updated_at',
        ];
    }
}
