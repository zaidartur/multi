<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Exports\ContactExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->contactModel = new ContactModel();
        $this->userModel = new User();
    }

    public function viewAll()
    {
        $detail = $this->userModel->detail();
        $contact = $this->contactModel->viewAll();
        return view('main.data.datakontak', ['detail' => $detail, 'contact' => $contact]);
    }

    public function export()
    {
        return Excel::download(new ContactExport, 'contact.xlsx');
        redirect()->route('/home');
    }
}
