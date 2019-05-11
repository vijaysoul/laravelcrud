<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
     protected $fillable = [ 'said', 'invon', 'invdate', 'cuid', 'pid', 'qty', 'amt' ];
}
