<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PackHub</title>
    <link href=" //cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        main > .container {
            padding: 60px 15px 0;
        }
    </style>
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fixed navbar</a>
            </div>
        </nav>
    </header>
    @yield('content')
<script src="{{ asset('assets/js/custom.js') }}"></script>    
</body>
</html>   