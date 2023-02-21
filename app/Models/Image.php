<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Image extends Model
{

    protected $table = 'images';
    public $timestamps = true;

    use HasFactory,HasTranslations;

    protected $dates = ['deleted_at'];
    protected $guarded =['id'];

    public $translatable = ['title','description'];


}
