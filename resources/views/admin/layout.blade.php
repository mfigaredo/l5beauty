<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('blog.title') }} Admin</title>
    <link href="/assets/css/admin.css" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    {{-- Navigation Bar --}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="sr-only">
                        Toggle Navigation
                    </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">{{ config('blog.title') }} Admin</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                @include('admin.partials.navbar')
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="/assets/js/admin.js"></script>
    @yield('scripts')
</body>
</html>
