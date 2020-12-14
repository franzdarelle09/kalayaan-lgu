<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Document;
class Documentlist extends Model
{
    protected $table = 'document_list';

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
