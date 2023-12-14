<?php

namespace App\Http\Controllers;

use App\Models\ImagePath;
use App\Models\Company;
use Illuminate\Http\Request;

class ImagePathController extends Controller
{
    public function index(Request $request)
    {
        $image_items = ImagePath::all();
        $company_items = Company::all();

        return view('image_path.index', compact('company_items','image_items'));
    }
}
