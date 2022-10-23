<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{

    protected $table = 'blogs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'title', 'content', 'image','lang','show_in_home','type');


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
