<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePath extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'image_path_id' => 'required',
        'image_path1' => 'required',
        'image_path2' => 'required',
        'image_path3' => 'required',
        'image_path4' => 'required',
        'image_path5' => 'required'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->image_path1;
    }
}