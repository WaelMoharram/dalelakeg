<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;

    use HasFactory,HasTranslations;

    protected $dates = ['deleted_at'];
    protected $guarded =['id'];

    public $translatable = ['name','slider_text_main','slider_text_sub'];


}
