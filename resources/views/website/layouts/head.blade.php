<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/style.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/magnific-popup.css" type="text/css" />
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/website')}}/css/custom.css" type="text/css" />

    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>{{__(env('APP_NAME'))}} | @yield('title')</title>

</head>
