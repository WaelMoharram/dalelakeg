<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Member extends Model
{

    protected $table = 'members';
    public $timestamps = true;

    use SoftDeletes,HasTranslations;

    protected $dates = ['deleted_at'];
    protected $guarded = array('id');
    public $translatable = ['address','description','title'];

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }


}
