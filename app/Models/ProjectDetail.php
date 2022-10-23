<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectDetail extends Model
{

    protected $table = 'project_details';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('content_ar','content_en','project_id');


    public function getContentAttribute(){
        if (app()->getLocale() =='ar'){
            return $this->content_ar;
        }
        return $this->content_en;
    }

    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }


}
