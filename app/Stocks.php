<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
     protected $fillable = [ 'sid', 'pid', 'qty'];
}
