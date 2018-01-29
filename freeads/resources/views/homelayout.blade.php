<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.5 CRUD Application</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('annonces') }}">FreeAds</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('annonces') }}">View All Ads</a></li>
            <li><a href="{{ URL::to('annonces/create') }}">Create a Ads</a>
        </ul>
    </nav>
    @yield('content')
</div>

</body>
</html>