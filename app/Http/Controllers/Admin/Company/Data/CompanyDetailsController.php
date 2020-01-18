<?php

namespace App\Http\Controllers\Admin\Company\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyDetailsController extends Controller
{
    public function details()
    {
        return response()->json(['company' => config('company')]);
    }
}
