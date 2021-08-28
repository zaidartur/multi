<?php

namespace App\Imports;

use App\Models\ContactModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ContactModel([
            'contact_phone'     => $row[0],
            'contact_sapaan'    => $row[1],
            'contact_name'      => $row[2],
            'contact_email'     => $row[3],
            'contact_gender'    => $row[4],
            'contact_birthday'  => $row[5],
            'contact_agama'     => $row[6],
            'contact_address'   => $row[7],
            'contact_pekerjaan' => $row[8],
            'contact_keterangan' => $row[9],
            'contact_urut'      => date('YmdHis'),
        ]);
    }
}
