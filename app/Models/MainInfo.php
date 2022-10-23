<?php

namespace App\Models;

use App\Traits\ColumnTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainInfo extends Model
{

    protected $table = 'main_info';
    public $timestamps = true;

    use SoftDeletes,ColumnTranslation;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'home_ready_for_help_title_ar',
        'home_ready_for_help_title_en',
        'home_ready_for_help_content_ar',
        'home_ready_for_help_content_en',

        'home_mission_ar',
        'home_mission_en',
        'home_message_ar',
        'home_message_en',
        'home_vision_ar',
        'home_vision_en',

        'events_title_ar',
        'events_title_en',
        'events_content1_ar',
        'events_content1_en',
        'events_content2_ar',
        'events_content2_en',

       'app_store_url',
       'google_play_url',


        'facebook',
        'twitter',
        'instagram',

    ];

    public function getHomeReadyForHelpTitleAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->home_ready_for_help_title_ar;
        }

        return $this->home_ready_for_help_title_en;
    }
    public function getHomeReadyForHelpContentAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->home_ready_for_help_content_ar;
        }

        return $this->home_ready_for_help_content_en;
    }
    public function getHomeMissionAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->home_mission_ar;
        }

        return $this->home_mission_en;
    }
    public function getHomeMessageAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->home_message_ar;
        }

        return $this->home_message_en;
    }
    public function getHomeVisionAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->home_vision_ar;
        }

        return $this->home_vision_ar;
    }
    public function getEventsTitleAttribute(){
        if(app()->getLocale() =='ar'){
            return $this->events_title_ar;
        }

        return $this->events_title_ar;
    }
    public function getEventsContent1Attribute(){
        if(app()->getLocale() =='ar'){
            return $this->events_content1_ar;
        }

        return $this->events_content1_ar;
    }
    public function getEventsContent2Attribute(){
        if(app()->getLocale() =='ar'){
            return $this->events_content2_ar;
        }

        return $this->events_content2_ar;
    }
}
