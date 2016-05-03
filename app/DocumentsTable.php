<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentsTable extends Model
{
    
    protected $table = 'documents_table';
    public function story() {
    return $this->belongsTo('App\StoriesTable');
    }
    //
}
