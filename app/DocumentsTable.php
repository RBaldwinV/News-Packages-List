<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentsTable extends Model
{
    
    protected $table = 'documentstable';
    public function story() {
    return $this->belongsTo('App\StoriesTable');
    }
    //
}
