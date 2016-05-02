<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoriesTable extends Model
{
    
    protected $table = 'storiestable';
    public function documents() {
    return $this->hasMany('App\DocumentsTable');
    }
    //
}
