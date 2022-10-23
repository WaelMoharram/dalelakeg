<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    protected $table = 'events';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id',  'content', 'video_url','lang','image');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
