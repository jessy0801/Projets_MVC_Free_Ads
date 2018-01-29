<!-- app/views/users/index.blade.php -->
@extends('header')
{{--<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('users') }}">View All Users</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create a User</a>
        </ul>
    </nav>--}}
@section('content')
    <div class="content">
        {{--<div class="search">
            <?php echo Form::open(array('method' => 'post')); ?>
            <?php echo Form::text('cle', NULL, array('placeholder' => 'Mot clé')); ?>
            <?php echo Form::select('categorie', array('all' => 'Toutes catégories', 'vehicule' => 'Vehicules', 'multimedia' => 'Multimedia', 'loisirs' => 'loisirs', 'maison' => 'Maison', 'autre' => 'Autres')); ?>
            <?php echo Form::text('prix', NULL, array('placeholder' => 'Prix')); ?>
            <?php echo Form::text('couleur', NULL, array('placeholder' => 'Couleur')); ?>
            <?php echo Form::submit("Rechercher"); ?>
            <?php echo Form::close(); ?>
        </div>--}}
        <div id="main">
            <?php foreach ($annonces as $annonce) { ?>
            <a href="view/<?php echo $annonce->id; ?>"><div class="annonce_div">
                    <h2>{{{ ucfirst($annonce->title) }}}</h2>
                    <img class="img" alt="no image" src="<?php echo base_path(); ?>/public/images/catalog/<?php echo $annonce->img; ?>">
                    <div class="prix">
                        <p><?php echo "Prix : " .  number_format($annonce->price, $decimals = 0 , $dec_point = "." , $thousands_sep = " " ) . "€"; ?></p>
                    </div>
                    <p><?php echo "Posté le "  .  date("d/m/Y", strtotime(substr($annonce->created_at, 0, 10))) . " à " . substr($annonce->created_at, 10); ?></p>
                </div></a>

            <?php } ?>
        </div>


    </div>
@endsection
{{--

</div>
</body>
</html>--}}
