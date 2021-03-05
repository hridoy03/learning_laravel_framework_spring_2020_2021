<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accountant extends Model
{
    protected $table = 'accountant';
    protected $primaryKey = 'id';
    
    public $timestamps = true;

    const date_added = 'date_added';
    const last_added = 'last_added';
}