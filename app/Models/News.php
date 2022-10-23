<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{

    protected $table = 'news';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'title', 'content', 'image','lang','show_in_home');


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
