<?php

namespace App\Http\Controllers\Admin\Invoicing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoicingController extends Controller
{
    public function index()
    {
        return view('admin.invoicing.index');
    }

    public function create()
    {
        return view('admin.invoicing.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
