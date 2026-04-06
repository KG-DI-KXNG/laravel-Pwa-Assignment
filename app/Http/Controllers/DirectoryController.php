<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class DirectoryController extends Controller
{

    public function index()
    {
        $staff = Staff::all();
        return view('pages.directory', ['staff' => $staff]);
    }
}
