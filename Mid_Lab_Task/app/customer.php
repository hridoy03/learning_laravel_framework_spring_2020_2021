<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    
    public $timestamps = true;

    const date_added = 'date_added';
    const last_added = 'last_added';
}