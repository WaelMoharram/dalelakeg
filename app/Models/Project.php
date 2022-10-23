<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

    protected $table = 'projects';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array( 'title_ar', 'title_en', 'content_ar','content_en', 'image','type');
    protected $with =['details'];

    public function getTitleAttribute(){
        if (app()->getLocale() =='ar'){
            return $this->title_ar;
        }
        return $this->title_en;
    }
    public function getContentAttribute(){
        if (app()->getLocale() =='ar'){
            return $this->content_ar;
        }
        return $this->content_en;
    }

    public function details(){
        return $this->hasMany(ProjectDetail::class,'project_id');
    }

}
