<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <title>Laravel - FreeAds</title>
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {!! Html::link('/', 'FreeAds', array('class' => 'navbar-brand'))!!}
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if(!Auth::check()): ?>
                <li>
                    {!! Html::link('/login', 'Connexion')!!}
                </li>
                <li>
                    {!! Html::link('/register', "Inscription")!!}
                </li>
                <?php endif ; ?>
                <?php if(Auth::check()): ?>
                <li>
                    {!! Html::link('/logout', "Deconnexion")!!}
                </li>
                <li>
                    {!! Html::link('/profil', "Profil")!!}
                </li>
                <li>
                    {!! Html::link('/annonces/create', "Ajouter une annonce")!!}
                </li>
                <li>
                    {!! Html::link('/annonces', "Voir vos annonces")!!}
                </li>
                <?php endif ; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
@yield('content')
</body>
</html>