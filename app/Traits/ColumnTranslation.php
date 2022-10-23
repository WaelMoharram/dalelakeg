<?php

namespace App\Traits;


trait ColumnTranslation
{
    public function getNameAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->name_ar ?? $this->name_en ?? null;
        }
        return $this->name_en ?? null;

    }
    public function getNationalityAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->nationality_ar ?? $this->nationality_en ?? null;
        }
        return $this->nationality_en ?? null;

    }


    public function getDescriptionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->description_ar ?? $this->description_en;
        }
        return $this->description_en;
    }


    public function getContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->content_ar ?? $this->content_en ?? null;
        }
        return $this->content_en ?? null;

    }

    public function getTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->title_ar ?? $this->title_en ?? null;
        }
        return $this->title_en ?? null;

    }

    public function getBtnTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->btn_text_ar ?? $this->btn_text_en ?? null;
        }
        return $this->btn_text_en ?? null;

    }

    public function getTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->text_ar ?? $this->text_en ?? null;
        }
        return $this->text_en ?? null;

    }

    public function getDayInfoAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->day_info_ar ?? $this->day_info_en ?? null;
        }
        return $this->day_info_en ?? null;

    }

    public function getTimeInfoAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->time_info_ar ?? $this->time_info_en ?? null;
        }
        return $this->time_info_en ?? null;

    }

    public function getMainContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->main_content_ar ?? $this->main_content_en ?? null;
        }
        return $this->main_content_en ?? null;

    }

    public function getSubContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->sub_content_ar ?? $this->sub_content_en ?? null;
        }
        return $this->sub_content_en ?? null;

    }

    public function getMissionAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->mission_ar ?? $this->mission_en ?? null;
        }
        return $this->mission_en ?? null;

    }

    public function getVisionAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->vision_ar ?? $this->vision_en ?? null;
        }
        return $this->vision_en ?? null;

    }

    public function getEmergencyCasesTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->emergency_cases_text_ar ?? $this->emergency_cases_text_en ?? null;
        }
        return $this->emergency_cases_text_en ?? null;

    }

    public function getServicesTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_text_ar ?? $this->services_text_en ?? null;
        }
        return $this->services_text_en ?? null;

    }

    public function getNewsletterTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->newsletter_text_ar ?? $this->newsletter_text_en ?? null;
        }
        return $this->newsletter_text_en ?? null;

    }

    public function getNewsTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->news_text_ar ?? $this->news_text_en ?? null;
        }
        return $this->news_text_en ?? null;

    }

    public function getFooterTextAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->footer_text_ar ?? $this->footer_text_en ?? null;
        }
        return $this->footer_text_en ?? null;

    }

    public function getPrivacyPolicyAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->privacy_policy_ar ?? $this->privacy_policy_en ?? null;
        }
        return $this->privacy_policy_en ?? null;

    }

    public function getTermsAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->terms_ar ?? $this->terms_en ?? null;
        }
        return $this->terms_en ?? null;

    }

    public function getAddressAttribute($value)
    {
        if (app()->getLocale() == 'ar') {

            return $this->address_ar ?? $this->address_en ?? $value ?? null;
        }
        return $this->address_en ?? $value ?? null;
    }

    public function getServicesTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_title_ar ?? $this->services_title_en ?? null;
        }
        return $this->services_title_en ?? null;

    }
    public function getServicesContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_content_ar ?? $this->services_content_en ?? null;
        }
        return $this->services_content_en ?? null;

    }

    public function getConsultingTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->consulting_title_ar ?? $this->consulting_title_en ?? null;
        }
        return $this->consulting_title_en ?? null;

    }
    public function getConsultingContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->consulting_content_ar ?? $this->consulting_content_en ?? null;
        }
        return $this->consulting_content_en ?? null;

    }

    public function getMediaTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->media_title_ar ?? $this->media_title_en ?? null;
        }
        return $this->media_title_en ?? null;

    }
    public function getMediaContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->media_content_ar ?? $this->media_content_en ?? null;
        }
        return $this->media_content_en ?? null;

    }

    public function getWorkTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->work_title_ar ?? $this->work_title_en ?? null;
        }
        return $this->work_title_en ?? null;

    }
    public function getWorkContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->work_content_ar ?? $this->work_content_en ?? null;
        }
        return $this->work_content_en ?? null;

    }
    public function getJobsTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->jobs_title_ar ?? $this->jobs_title_en ?? null;
        }
        return $this->jobs_title_en ?? null;

    }
    public function getJobsContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->jobs_content_ar ?? $this->jobs_content_en ?? null;
        }
        return $this->jobs_content_en ?? null;

    }

    public function getTeamTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->team_title_ar ?? $this->team_title_en ?? null;
        }
        return $this->team_title_en ?? null;

    }
    public function getTeamContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->team_content_ar ?? $this->team_content_en ?? null;
        }
        return $this->team_content_en ?? null;

    }
    public function getContactBlockTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->contact_block_title_ar ?? $this->contact_block_title_en ?? null;
        }
        return $this->contact_block_title_en ?? null;

    }
    public function getContactBlockContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->contact_block_content_ar ?? $this->contact_block_content_en ?? null;
        }
        return $this->contact_block_content_en ?? null;

    }

    public function getHomeTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->home_title_ar ?? $this->home_title_en ?? null;
        }
        return $this->home_title_en ?? null;

    }
    public function getHomeContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->home_content_ar ?? $this->home_content_en ?? null;
        }
        return $this->home_content_en ?? null;

    }

    public function getHomeGoalTitleAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->home_goal_title_ar ?? $this->home_goal_title_en ?? null;
        }
        return $this->home_goal_title_en ?? null;

    }

    public function getHomeGoalContentAttribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->home_goal_content_ar ?? $this->home_goal_content_en ?? null;
        }
        return $this->home_goal_content_en ?? null;

    }

    public function getServicesTitle1Attribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_title_1_ar ?? $this->services_title_1_en ?? null;
        }
        return $this->services_title_1_en ?? null;

    }

    public function getServicesTitle2Attribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_title_2_ar ?? $this->services_title_2_en ?? null;
        }
        return $this->services_title_2_en ?? null;

    }

    public function getServicesTitle3Attribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_title_3_ar ?? $this->services_title_3_en ?? null;
        }
        return $this->services_title_3_en ?? null;

    }

    public function getServicesTitle4Attribute()
    {
        if (app()->getLocale() == 'ar') {

            return $this->services_title_4_ar ?? $this->services_title_4_en ?? null;
        }
        return $this->services_title_4_en ?? null;

    }

}
