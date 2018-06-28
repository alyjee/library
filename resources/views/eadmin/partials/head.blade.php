<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>BellyKick - Admin</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/eadmin/material/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/eadmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    
    <!-- Editable CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('public/eadmin/plugins/bower_components/jsgrid/dist/jsgrid.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('public/eadmin/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css') }}" />


    <!-- Menu CSS -->
    <link href="{{ asset('public/eadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">

    <!--alerts CSS -->
    <link href="{{ asset('public/eadmin/plugins/bower_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">

    <!-- toast CSS -->
    <link href="{{ asset('public/eadmin/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">

    <!-- morris CSS -->
    <link href="{{ asset('public/eadmin/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('public/eadmin/material/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/eadmin/material/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/css/custom.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('public/eadmin/material/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script type="text/javascript" >
        siteUrl = '{{ URL::to('/') }}';
    </script>
</head>