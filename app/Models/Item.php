<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Item extends Model
{
    protected $table = 'items';
    public $timestamps = true;

    use HasFactory,HasTranslations;

    protected $dates = ['deleted_at'];
    protected $guarded =['id'];

    public $translatable = ['name','slider_text_main','slider_text_sub','description'];


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
