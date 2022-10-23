<?php

namespace App\Models;

use App\Traits\ColumnTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class ContactUs extends Model
{

    protected $table = 'contact_us';
    public $timestamps = true;

    use SoftDeletes, HasTranslations;

    protected $dates = ['deleted_at'];
    protected $guarded = [
        'id'
    ];

    public $translatable = ['title','section_1_title','section_2_title','section_3_title','section_4_title','section_1_sub_title','section_2_sub_title','section_3_sub_title','section_4_sub_title'];
}

