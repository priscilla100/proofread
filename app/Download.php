<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table='download';
    protected $fillable = ['title', 'filename'];
}
