<?php

namespace App\Http\Controllers;

use App\Models\ImagePath;
use Illuminate\Http\Request;

class ImagePathController extends Controller
{
    public function index(Request $request)
    {
        $items = ImagePath::all();
        return view('image_path.index', compact('items'));
    }
}
