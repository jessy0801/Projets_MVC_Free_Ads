<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['title', 'body', 'img', 'id_user', 'price'];
}
