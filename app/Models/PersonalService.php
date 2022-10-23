<?php

namespace App\Models;

use App\Traits\ColumnTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalService extends Model
{

    protected $table = 'personal_services';
    public $timestamps = true;

    use SoftDeletes,ColumnTranslation;

    protected $dates = ['deleted_at'];
    protected $fillable = array( 'image','content_ar','content_en');


}
