<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
      protected $fillable = [ 'cuid', 'name', 'addr', 'city', 'contact' ];
}
