<?php

namespace App\Models;

use App\Traits\ColumnTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{

    protected $table = 'services';
    public $timestamps = true;

    use SoftDeletes,ColumnTranslation;

    protected $dates = ['deleted_at'];
    protected $guarded = array('id');


}
