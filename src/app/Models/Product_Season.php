<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Season extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'price' => 'required',
        'image' => 'required',
        'title' => 'required',
        'author_id' => 'required',
        'season' => 'required',
        'description' => 'required',
    );

    public function getProduct()
    {
        return 'ID' . $this->id . ':' . $this->product;

    }
}