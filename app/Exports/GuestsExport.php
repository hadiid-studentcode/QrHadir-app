<?php

namespace App\Exports;

use App\Models\Guests;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuestsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Guests::select('*')->get();
    }

    public function map($guest): array
    {
        return [
            $guest->id,
            $guest->nama_customer,
            $guest->kota,
            $guest->segmen,
            $guest->link,
            $guest->qr_code,
            $guest->created_at,
            $guest->updated_at,
        ];

    }
    public function headings(): array
    {
        return [
            '#',
            'nama_customer',
            'kota',
            'segmen',
            'link',
            'qr_code',
            'Created_at',
            'Updated_at',
        ];
    }
}
