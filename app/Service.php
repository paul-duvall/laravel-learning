<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|Request|string name
 */
class Service extends Model
{
    protected $fillable = ['name'];
}
