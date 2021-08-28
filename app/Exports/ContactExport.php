<?php

namespace App\Exports;

use App\Models\ContactModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContactExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactModel::all();
    }
}
