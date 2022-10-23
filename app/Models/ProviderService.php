<?php

namespace App\Models;

use App\Traits\ColumnTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderService extends Model
{

    protected $table = 'provider_services';
    public $timestamps = true;

    use SoftDeletes,ColumnTranslation;

    protected $dates = ['deleted_at'];
    protected $fillable = array('content_ar','content_en');


}
