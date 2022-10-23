<?php

namespace App\Models;

use App\Traits\ColumnTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{

    protected $table = 'partners';
    public $timestamps = true;

    use SoftDeletes,ColumnTranslation;

    protected $dates = ['deleted_at'];
    protected $fillable = array('image');


}
