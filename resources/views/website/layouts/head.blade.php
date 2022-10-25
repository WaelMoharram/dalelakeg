<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/style.css" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/website')}}/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/magnific-popup.css" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/components/bs-switches.css" type="text/css" />


    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

    <!-- Seo Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/colors.php?color=FE9603" type="text/css" /> <!-- Theme Color -->
    <link rel="stylesheet" href="{{asset('assets/website')}}/demos/seo/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/website')}}/demos/seo/seo.css" type="text/css" />
    <!-- / -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('assets/website')}}/css/custom.css" type="text/css" />
@endif
<!-- Document Title
    ============================================= -->
    <title>{{__(env('APP_NAME'))}} | @yield('title')</title>


</head>
