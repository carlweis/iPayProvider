<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Admin</title>
    <link rel="stylesheet" href="/css/admin.css">
    @yield('styles')

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body @if (Request::is('auth/login*')) class="auth-login" @endif>
    <main id="auth-content">
    @yield('content')
    </main>
    <script src="/js/vendor.js"></script>
</body>
</html>