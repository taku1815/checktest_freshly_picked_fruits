<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        // 'season' => 'required'
    );
    public function getDetail()
    {
        $txt = 'ID:' . $this->id . ' ' . $this->name;
        return $txt;
    }
    public function products()
    {
        return $this->belongsToMany(product::class);
    }
}