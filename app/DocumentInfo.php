<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentInfo extends Model
{
    protected $fillable = ['doc_name'];

    public function user(){
        return $this->belongsTo('User');
    }
}
