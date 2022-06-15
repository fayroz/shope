<?php

namespace Client;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model 
{

    protected $table = 'Clients';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}