<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';
    
    public $timestamps = true;

    const date_added = 'date_added';
    const last_added = 'last_added';
}