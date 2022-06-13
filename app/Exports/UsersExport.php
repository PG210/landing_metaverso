<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\DatosModel;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Empresa',
            'Cargo',
            'Correo',
            'Telefono', 
            'Estado',
        ];
    }


    public function collection()
    {
        return DatosModel::select('id', 'nombre', 'empresa', 'cargo', 'correo', 'telefono', 'estado')->get();
    }
}
