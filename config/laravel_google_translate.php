<?php
return [
    'google_translate_api_key'=>'AIzaSyBFu0Cz20NrYd4s34kiMeA5ifWUCT55QM0',
    'yandex_translate_api_key'=>null,
    'custom_api_translator' => null,
    'custom_api_translator_key' => null,
    'api_limit_settings'=>[
        'no_requests_per_batch' => 5,
        'sleep_time_between_batches' => 1
    ],
    'trans_functions' => [
        'trans',
        'trans_choice',
        'Lang::get',
        'Lang::choice',
        'Lang::trans',
        'Lang::transChoice',
        '@lang',
        '@choice',
        '__',
        '\$trans.get',
        '\$t'
    ],
];
