<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Yajra\DataTables\DataTables;

class DatatablesController extends Controller
{
    public function Index()
    {
        return view('view_farmers');
    }

    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
}