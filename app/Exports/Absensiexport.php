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




    public function collection()
    {



        $kelolaAbsensi = new Absensi();

        $dataAbsensi = $kelolaAbsensi->getAbsensiByDate('2024-05-20', '17:59:00', '23:59:00');


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
