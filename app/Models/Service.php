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
    protected $fillable = array( 'title_en', 'title_ar', 'content_ar','content_en');

    public function getTitleAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->title_ar;
        }

        return $this->title_en;
    }
    public function getContentAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->content_ar;
        }

        return $this->content_en;
    }
}
