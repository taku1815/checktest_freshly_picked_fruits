<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'description'];

    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'price' => 'required',
        'image' => 'required',
        // 'season' => 'required'
        'description' => 'required',
    );

    public function getDetail()
    {
        return 'ID: ' . $this->id . ' / 商品名: ' . $this->name . ' / 価格: ' . $this->price . '円 / 説明: ' . $this->description . ' / 画像: ' . asset('storage/' . $this->image);

        // return $text;
    }
    // public function product_season()
    // {
    //     return $this->hasOne('App\Models\product_season');
    // }
    public function seasons()
    {
        return $this->belongsToMany(season::class);
    }
}