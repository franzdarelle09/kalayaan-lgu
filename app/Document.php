<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Documentlist;

class Document extends Model
{
    public function documentlist(){
        return $this->belongsTo(Documentlist::class);
    }
}
